
<?php
session_start();
require("../connection/connect.php");

$msg="";
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
 
  $user_type=$_POST['user_type'];

  $sql="SELECT * FROM asset_user WHERE username=? AND password=? AND user_type=?";
  $stmt=$con->prepare($sql);
  $stmt->bind_param("sss",$username,$password,$user_type);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_assoc();

  session_regenerate_id();
  $_SESSION['username']= $row['username'];
  $_SESSION['user_type']= $row['user_type'];
  
  session_write_close();

  if($result->num_rows==1 && $_SESSION['user_type']=="it_officer"){
    header("location:recomend.php");
  }
  else if($result->num_rows==1 && $_SESSION['user_type']=="subject"){
    header("location:dashboard.php");
   }
  else if($result->num_rows==1 && $_SESSION['user_type']=="supplier"){
  header("location:supplier.php");
}
 else if($result->num_rows==1 && $_SESSION['user_type']=="procurement"){
  header("location:procurement.php");
 }
 else if($result->num_rows==1 && $_SESSION['user_type']=="finance"){
  header("location:finance.php");
 }
 else if($result->num_rows==1 && $_SESSION['user_type']=="gm"){
  header("location:manager.php");
 }
 else if($result->num_rows==1 && $_SESSION['user_type']=="data_enter"){
  header("location:../../index02.php");
 }
 else{
 echo $msg="Username or Password is Incorrect!";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" >
  <meta http-equiv="X-UA-Compatible" content="EI=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
	<title>multi-user role-based-login-system</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
  
  .container{
    width:1800px;
    margin-left:15%;
    margin-top:1%;
    margin-bottom:10%;
  }
  
  </style>
<body >
  
<nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="../asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="../asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    <div class="bg-image" 
     style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/642/161/large_2x/black-cat-hiding-behind-the-laptop-cat-interferes-with-the-work-happy-pet-owners-illustration-vector.jpg');
            height: 100vh;background-repeat: no-repeat; "  >

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 bg-light mt-5 px-0">
        <h3 class="text-center text-light bg-dark bg-gradient p-3">Login Here</h3>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
          <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Username required">
           </div><br>
<div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" placeholder=" password required">
</div><br>
<div class="form-group">
 <!-- <label for="userType"> I'm a :</label>
  <input type="radio" name="userType" value="User" class="custom-radio" required>&nbsp; User|-->
 
  <input type="radio" name="user_type" value="it_officer" class="custom-radio" required>&nbsp; It_officer|
  <input type="radio" name="user_type" value="data_enter" class="custom-radio" required>&nbsp; data_enter|
  <input type="radio" name="user_type" value="subject" class="custom-radio" required>&nbsp; Subject|
 
  <input type="radio" name="user_type" value="Procurement" class="custom-radio" required>&nbsp; Procurement|
  <input type="radio" name="user_type" value="Finance" class="custom-radio" required>&nbsp; Finance|
  <input type="radio" name="user_type" value="GM" class="custom-radio" required>&nbsp; GM|
  
</div>
<div class="form-group"><center>
  <input type="submit" name="login" class="btn btn-success btn-block" value="Login"></center>
</div>
<div class="login-text">
                <p class="text">Create your account <a class="login-btn" href="register1.php">Register here</a></p>
                <p class="text"> Forgot Password ?<a href="update/login.php?Getname=<?php   $username ?>">Change Password</a></div>
                
            </div>
<!--<p>don't have an account? <a href="login/register.php">register now</a></p>
<h5 class="text-danger text-center"><?= $msg; ?></h5>-->

</form>

</div>
</div>
</div>
</body>
</html>