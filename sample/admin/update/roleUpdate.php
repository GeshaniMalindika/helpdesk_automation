<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $title = $_POST['title'];
        $emp_name = $_POST['emp_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        $user_type = $_POST['user_type'];
        
        

        $query = " update asset_user set  user_type='".$user_type."' where emp_id='".$emp_id."'";
        

        
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../user.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../user.php");
    }
?>