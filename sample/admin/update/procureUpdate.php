<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        
        

        $query = " update asset_user set   password='".$password."' where emp_id='".$emp_id."' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../pro.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../pro.php");
    }
?>