<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $emp_id= $_GET['ID'];
       
        $checkout = $_POST['checkout'];
        
        

        $query = " update complain set  checkout='".$checkout."' where emp_id='".$emp_id."'";
        

        
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../complainTable.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../complainTable.php");
    }
?>