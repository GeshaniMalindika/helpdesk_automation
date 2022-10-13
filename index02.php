<?php
    require("./connection/connect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index02</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <script src="assets/fontawesome/js/all.min.js"></script>
    <style>
    
    .button a{
        position: relative;
    font-size: 20px;
    width: 200px;
    height: 50px;
    background-color:#8EAAE8;
    left: 3%;
    top: 50%;
    padding: 10px 20px;
    margin: 20px 0;
    border-radius: 50px;
    color: #066B54;
    font-family: monospace;
    font-color:#000;
    }
    #animation{
    font-size:28px;
    color:blue;
    font-weight:bold;
    margin-top:8px;
    color:	#00008B;
   
    }
    .animation{
        margin-left:1450px;
        
        font-size:24px;
        color:	#00008B;
        
    }

    .image{
  border-radius:105px;
  margin-left:-6%;
}
    </style>
</head>

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
        
        
        <?php
                    $sql = "SELECT * from asset_user where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $emp_name=$row['emp_name'];
                            echo '<b><Center><h3>click &nbsp;<i class="fa fa-hand-o-right" style="font-size:36px"></i></b></h3></Center>';
                             echo '<h3><b><a href="profile.php"> <img src="./asset/image/profile.png" width="50" height="50"></a></b></h3>'; 
                        }
                    }
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
    </nav>
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
       
      
       <a class="navbar-brand"><b>HELPDESK</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active ml-4" href="index.php">Home</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link ml-4" href="userList.php">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4" href="report.php">Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4" href="change1.php">Change Password</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link ml-4" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        
       </div>
    </nav>
    <?php
                    $sql = "SELECT * from asset_user where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $emp_name=$row['emp_name'];
                           
                            echo'<div class="w3-container w3-center w3-animate-top" id="animation">HELLO, WELCOME '.$emp_name.' ..!!<BR>You are PC User </div>';
                            
                        }
                    }
                ?>
    
    <section class="home p-5">
        <p class="home-p pt-5 pb-3" >Our feature-rich help desk software speeds up ticket resolution with the help of proactive automations and
            highly customizable workflows.</p>
        
         <img src= "https://raidrush.net/attachments/55149/" width="350" height="300" class="image" >
        
         
    </section>
    

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4 bg-secondary">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mt-md-0 mt-3"> </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold text-center">Footer text</h5>
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga
                        perferendis modi
                        earum
                        commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam,
                        aspernatur id
                        excepturi hic.</p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mt-md-0 mt-3"> </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-light py-3 bg-dark">&nbsp© 2022 Copyright :
            <a href="/"> Road Passenger Transport Authority</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
    