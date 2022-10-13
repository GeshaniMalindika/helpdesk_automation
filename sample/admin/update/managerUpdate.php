<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
        $emp_name = $_POST['emp_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        
        

        $query = " update asset_user set emp_id='".$emp_id."', emp_name = '".$emp_name."', contact_no='".$contact_no."',username='".$username."',address='".$address."' where emp_id='".$emp_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../gmTable.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../gmTable.php");
    }
?>