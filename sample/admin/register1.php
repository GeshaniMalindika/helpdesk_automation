<?php
    require("./connection/connect.php");
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $emp_id=$_POST['emp_id'];
        $emp_name=$_POST['emp_name'];
        $contact_no=$_POST['contact_no'];
        $username=$_POST['username'];
        $address=$_POST['address'];
        $devision=$_POST['devision'];
        $password=$_POST['password'];
        //$hashed_password=password_hash($password,PASSWORD_DEFAULT);

        $sql="insert into `asset_user` (title,emp_id,emp_name,contact_no,username,address,devision,password) values('$title','$emp_id','$emp_name','$contact_no','$username','$address','$devision','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:login1.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="CSS/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<style>
    .b{
    margin-left:50px;
   color:white;

  }
  #footer {
   position: fixed;
   bottom:0;
   width: 100%;
   height: 60px;   /* Height of the footer */
   background: #6cf;
}  
.container{
    max-width: 700px;
    width: 500%;
    margin-top: 91px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 5px 15px 15px rgb(70, 63, 63);
}
</style>
<body>
<nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="./../../asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="./../../asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
       
        
        
       </div>
    </nav>
    <div class="bg-image" 
     style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/642/161/large_2x/black-cat-hiding-behind-the-laptop-cat-interferes-with-the-work-happy-pet-owners-illustration-vector.jpg');
            height: 100vh;background-repeat: no-repeat;">
        
        
        
        <div class="container">
        <div class="title">Register Here</div>
        <form method="post">
        <div class="user-details">
<!--  --> 
    <div>
    <label for="title">Title</label>
      <select name="title" id="title">      
                        <option value="Mr.">Mr. </option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss.">Miss.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Rev.">Rev.</option>                        
       </select> 
    </div>    
                <div class="input-box">
                    <span class="details">Employee ID</span>
                    <input type="text" placeholder="Enter your reg_number" name="emp_id" required> 
                </div>
                <div class="input-box">
                    <span class="details">Employee Name</span>
                    <input type="text" placeholder="Enter your first name" name="emp_name" required> 
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="tel" pattern="[0-9]{10}"  placeholder="Enter your number" name="contact_no" required> 
                </div>
            
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your email" name="username" required> 
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your last name" name="address" required> 
                </div>
                <div class="input-box">
                    <span class="details">Devision</span>
                    <input type="text" placeholder="Enter your last name" name="devision" required> 
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter your password" name="password" required> 
                </div>
                
            </div>
            
            
            <div class="button-group" >
                <input type="submit" value="submit" name="submit">
                <input type="reset" value="cancel" name="cancel" >
            </div>
            <div class="login-text">
                <p class="text">You have already account <a class="login-btn" href="login1.php">Login here</a></p>
            </div>
        </form>
    </div>
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
    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4 bg-secondary" id="footer">

       

        <!-- Copyright -->
        <div class="footer-copyright text-light py-3 bg-dark">&nbsp© 2022 Copyright :
            <a href="/"> Road Passenger Transport Authority</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>
</html>