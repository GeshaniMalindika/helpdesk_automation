<?php
    require("../../connection/connect.php");

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
       
          $stmt=$con->prepare("DELETE FROM complain WHERE complain_id=?");
          $stmt->bind_param('i',$id);
          $stmt->execute();

        $_SESSION['showAlert']='block';
        $_SESSION['message']='removed successfully.!';
        header('location:../complainTable.php');
    }
?>