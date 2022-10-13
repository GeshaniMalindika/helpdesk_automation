<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        
        

        $query = " update asset_user set  username = '".$username."', password='".$password."' where emp_id='".$emp_id."' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../fin.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../fin.php");
    }
?>