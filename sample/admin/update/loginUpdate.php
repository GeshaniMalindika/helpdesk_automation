<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        //$emp_id= $_GET['ID'];
        //$emp_name = $_POST['emp_name'];
        //$contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        //$address = $_POST['address'];
        $password = $_POST['password'];
        

        $query = " update asset_user set  password = '".$password."' where username='".$username."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            //echo "<script type='text/javascript'> Alert('submit successfully') </script>";
           header("location:../login1.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../login1.php");
    }
?>