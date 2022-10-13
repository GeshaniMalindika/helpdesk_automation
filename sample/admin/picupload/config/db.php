<?php
$server="localhost";
$user="root";
$password="";
$dbname="helpdesk1";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn){
    die("connection Failed" .mysqli_connect_error());
    
}
?>
