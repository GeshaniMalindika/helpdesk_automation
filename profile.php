<?php
    session_start();
    require("./connection/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/complain.css">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    * {
    margin: 0;
    padding: 0
}

body {
    background-image: linear-gradient(to right, rgba(255,0,0,0),   #765D69);
    
}

.card {
    width: 550px;
    background-color: #efefef;
    border: none;
    align-items: center;
    cursor: pointer;
    transition: all 0.5s;
    justify-content: center;
    height:600px;
}
h3{
    color: blue;
    margin-top: 20px;
}
.h5{
    margin-left:10px;
}
.line{
    display: flex;
    margin-top: 10px;
}
.home a{
    position: relative;
    font-size: 20px;
    width: 200px;
    height: 100px;
    background-color:#8EAAE8;
    left: 3%;
    top: 80%;
    padding: 10px 20px;
    margin: 20px 0;
    border-radius: 50px;
    color: #066B54;
    font-family: monospace;
    font-color:#000;
}

</style>
<body>
<nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="./asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="./asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    
    <section>
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            
            <div class="card p-4">
                <h1>My Profile</h1>
                <img src="./asset/image/profile.png" width="100" height="95">
                <font align="left">
            <?php
            
            $sql = "SELECT * from asset_user where username = '".$_SESSION['username']."'";
             $result=mysqli_query($con,$sql);
             if($result){
                 while($row=mysqli_fetch_assoc($result)){
                    $emp_id=$row['emp_id'];
                    $title=$row['title'];
                     $emp_name=$row['emp_name'];
                     $contact_no=$row['contact_no'];
                     $username=$row['username'];
                     $address=$row['address'];
                     $user_type=$row['user_type'];
                      echo '<h3>'.$title.' '.$emp_name.' </h3>';
                      echo '<div class="line"><h5>Employee No</h5><p> - '.$emp_id.'</div>';
                      echo '<div class="line"><h5>Email</h5><p> - '.$username.'</div>';
                      echo '<div class="line"><h5>Contact_no</h5><p> - '.$contact_no.'</div>';
                      echo '<div class="line"><h5>Role</h5><p> - '.$user_type.'</div>';
                      
                 }
             }


                ?>
                </font>
<section class="home">
<a href="index02.php" class="previous">&laquo;Previous </a>&nbsp;
             <a href="complain.php">Complaint Now  &raquo;</a>
             
   
            </section>
            </div>
        </div>
    </section>
</body>

</html>