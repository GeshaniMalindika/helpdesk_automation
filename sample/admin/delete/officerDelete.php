<?php
    require("../../connection/connect.php");

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
       
          $stmt=$con->prepare("DELETE FROM it_officer WHERE reg_no=?");
          $stmt->bind_param('s',$id);
          $stmt->execute();
          $stmt->store_result();

        $_SESSION['showAlert']='block';
        $_SESSION['message']='removed successfully.!';
        header('location:../officerTable.php');
    }
?> 