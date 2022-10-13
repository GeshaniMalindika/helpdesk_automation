<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $complain_id= $_GET['ID'];
        $pdf = $_POST['pdf'];
        $amount = $_POST['amount'];
        
        
        

        $query = " update f_invoice set amount='".$amount."' where complain_id='".$complain_id."' and status='1'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../invoice1.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../invoice1.php");
    }
?>