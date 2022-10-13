<?php
    require("../../connection/connect.php");

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
       
          $stmt=$con->prepare("DELETE FROM f_invoice WHERE complain_id=?");
          $stmt->bind_param('s',$id);
          $stmt->execute();
          $stmt->store_result();

        $_SESSION['showAlert']='block';
        $_SESSION['message']='removed successfully.!';
        header('location:../invoice.php');
    }
?> 