<?php
    require("../connection/connect.php");
    if(isset($_POST['submit'])){

        $sql = "select * from `finance_officer` where `name`='$_POST[name]' and `password`='$_POST[password]'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            header('location:dashboard.php');
        }
        else{
            echo "<script>alert('Incorrect Password! Try again.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procurement Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
   
    <div class="container">
        <div class="wrapper">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please login</h2>
                <input type="text" class="form-control" name="name" placeholder="Name"/>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                <div class="login-text">
                
            </div>
            </form>
        </div>
    </div>
</body>

</html>