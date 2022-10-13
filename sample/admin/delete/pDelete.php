<?php
    require("../../connection/connect.php");

    if(isset($_GET['remove'])){
        $reg_no=$_GET['remove'];
       
          $stmt=$con->prepare("DELETE FROM procurement WHERE reg_no=?");
          $stmt->bind_param('s',$reg_no);
          $stmt->execute();
          

        $_SESSION['showAlert']='block';
        $_SESSION['message']='removed successfully.!';
        header('location:../procurementTable.php');
    }
?> 