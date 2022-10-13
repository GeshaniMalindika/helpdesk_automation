<?php
    $con=new mysqli('localhost','root','','helpdesk1');

    if(!$con){
        die(mysqli_error($con));
    }
?>