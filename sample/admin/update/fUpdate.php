<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $id= $_GET['ID'];
        $pdf = $_POST['pdf'];
        $amount = $_POST['amount'];
        
        
        

        $query = " update f_invoice set amount='".$amount."' where id='".$id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../final_report.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../final_report.php");
    }
?>