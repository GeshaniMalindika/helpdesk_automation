<?php
namespace Phppot;

class PasswordReset
{

    private $ds;

    function __construct()
    {
        require("../connection/connect.php");

        $this->ds = new DataSource();
    }

    public function insert($emp_id, $token)
    {
        $query = 'INSERT INTO tbl_password_reset (emp_id, password_recovery_token, expire_at, is_valid) VALUES (?, ?, ?, ?)';
        $paramType = 'sssi';
        $time = date('Y-m-d H:i:s');
        // expire the token after 12 hours
        $RESET_TOKEN_LIFE = '12 hours';
        $expireAt = date('Y-m-d H:i:s', strtotime($time . ' + ' . $RESET_TOKEN_LIFE));

        $paramValue = array(
            $emp_id,
            $token,
            $expireAt,
            1
        );
        $emp_id = $this->ds->insert($query, $paramType, $paramValue);
    }

    public function getMemberForgotByResetToken($recoveryToken)
    {
        $query = 'SELECT * FROM tbl_password_reset where password_recovery_token = ? AND is_valid = 1 AND expire_at >= now()';
        $paramType = 's';
        $paramValue = array(
            $recoveryToken
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    public function expireToken($recoveryToken)
    {
        $query = 'UPDATE tbl_password_reset SET is_valid = 0, expired_at = now() WHERE password_recovery_token = ?';
        $paramType = 's';
        $paramValue = array(
            $recoveryToken
        );
        $this->ds->execute($query, $paramType, $paramValue);
    }
}