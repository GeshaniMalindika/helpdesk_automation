
<?php
    /*require("./connection/connect.php");
    if(isset($_POST['submit'])){

        $sql = "select * from `asset_user` where `username`='$_POST[username]' and `password`='$_POST[password]'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['PASSWORD']=$_POST['password'];
            header('location:sample/admin/login1.php');
        }
        else{
            echo "<script>alert('Incorrect Password! Try again.');</script>";
        }
    }*/
?>
<?php 

require("../connection/connect.php");
$username = $_GET['Getname'];
$query = " select * from asset_user where username='".$username."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
       // $emp_id = $row['emp_id'];
        $username = $row['username'];
        $password = $row['password'];
        $emp_name = $row['emp_name'];
       // $Cpassword = $row['Cpassword'];
        
        
        
        
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
</head>
<style>
   .container{
    max-width: 400px;
    width: 100%;
    margin-top: 5%;
    margin-left: 4zs0%;
    background: white;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 5px 5px 5px rgb(70, 63, 63);
    
}
  .b{
    margin-left:590px;
   color:white;

  }
  #footer {
   position: fixed;
   bottom:0;
   width: 100%;
   height: 60px;   /* Height of the footer */
   background: #6cf;
  }
  .container .title{
    font-size: 25px;
    font-weight: 400;
    position: relative;
}
.container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 28px;
    border-radius: 2px;
    background: #2d4d5f;
}
.container form .user-details{
    margin: 15px 0 0 0;
}
.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin: 25px 0 15px 0;
}
.user-details .input-box input{
    height: 35px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

</style>
<body >
    <!-- Header -->
    <nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="../../asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="../../asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container1">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<a class="navbar-brand"><b class="b">FORGOT PASSWORD</b></a>
        </div>
        </div>
       </div>
    </nav>
    <div class="bg-image" 
     style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/642/161/large_2x/black-cat-hiding-behind-the-laptop-cat-interferes-with-the-work-happy-pet-owners-illustration-vector.jpg');
            height: 100vh;background-repeat: no-repeat;"  >
    
        <div class="container">
        <div class="title">Reset Password</div>
        <form action="loginUpdate.php?name=<?php  $username ?>" method="post">
            <div class="user-details">
           
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your email" name="username" required> 
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" name="password" required> 
                </div>
                
            </div>
            <br>
            <div class="button">
            <button class="btn btn-primary" name="update">Submit</button><br>
                <!--<input type="submit" value="submit" name="submit">-->
                <p>Login <a class="login-btn" href="../login1.php">Login here</a></p>
            </div>
</div> 
        </form>
</div>
   
   
</div>

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4 bg-secondary" id="footer">

       

        <!-- Copyright -->
        <div class="footer-copyright text-light py-3 bg-dark">&nbsp© 2022 Copyright :
            <a href="/"> Road Passenger Transport Authority</a>
        </div>
        <!-- Copyright -->
        <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>