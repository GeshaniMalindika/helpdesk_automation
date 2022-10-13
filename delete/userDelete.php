<?php
    require("../connection/connect.php");

    if(isset($_GET['deletecomplain_id'])){
        $complain_id=$_GET['deletecomplain_id'];
       
        $sql="delete  from `complain`where complain_id=$complain_id" ;
        $result=mysqli_query($con,$sql);
        if($result){
            header("location: ../complain.php");
        }
        else{
            die(mysqli_error($con));
        }
    }
?>