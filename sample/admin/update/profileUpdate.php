<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$hashed_password=password_hash($password,PASSWORD_DEFAULT);
        
        

        $query = " update asset_user set  username = '".$username."', password='".$password."' where emp_id='".$emp_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../edit_profile.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../edit_profile.php");
    }
?>
<?php
/*$qry = "SELECT * FROM `asset_users` WHERE `password` = '" . $_POST['password'] . "' AND `username` = '" . mysql_real_escape_string($_POST['username']) . "' AND `date` > DATE_SUB(NOW(), INTERVAL 3 Day)";
$qry = mysql_query($qry);
If (@mysql_num_rows($qry) == 1)
{
echo 'GREAT - Your in!';
}
else
{
$qry = "SELECT * FROM `asset_users` WHERE `password` = '" . $_POST['password'] . "' AND `username` = '" . mysql_real_escape_string($_POST['username']) . "'";
$qry = mysql_query($qry);
if (@mysql_num_rows($qry) == 1)
{
 echo 'Your password has expired';
 // put form in to chose new password...
}
else
{
 echo 'User not recognized';
}
}*/
?>