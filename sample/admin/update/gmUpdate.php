<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $emp_name = $_POST['emp_name'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $devision = $_POST['devision'];
        
        

        $query = "update general manager set  emp_id='".$emp_id."', emp_name = '".$emp_name."', contact_no='".$contact_no."',email='".$email."',address='".$address."',devision='".$devision."' where emp_id='".$emp_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../manager1.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../manager1.php");
    }
?>