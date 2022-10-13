

<?php
    require("../../connection/connect.php");

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
       
          $stmt=$con->prepare("DELETE FROM asset_user WHERE emp_id=?");
          $stmt->bind_param('s',$id);
          $stmt->execute();
          

        $_SESSION['showAlert']='block';
        $_SESSION['message']='removed successfully.!';
        header('location:../userTable.php');
    }
?> 