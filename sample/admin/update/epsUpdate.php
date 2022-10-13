<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $id= $_GET['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        

        $query = " update user set  username = '".$username."', password='".$password."', email='".$email."', contact_no='".$contact_no."' where id='".$id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../supplierProfile.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../supplierProfile.php");
    }
?>