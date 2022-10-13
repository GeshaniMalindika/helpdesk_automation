<?php  

session_start();
if(!isset($_SESSION['username'])|| $_SESSION['user_type']!="procurement"){
    header("location:procurement.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
<head>
    <meta charset="utf-8">
    <title>Procurement</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addUser.css" rel="stylesheet">
</head>
<style>
    .container{
    max-width: 1100px;
    width: 400%;
    margin-left: 30%;
    margin-top: 55px;
    background:#fff;
    padding: 25px 30px;
  
    border-radius: 55px;
}
.card{
    border-radius: 55px;
    margin-bottom:4%;
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: #6C587B;
    transition: 0.3s;
 
}
.card2{
    border-radius: 55px;
    
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: #355C7D;
    transition: 0.3s;
 
}
body{
    background:#DDDDDA;
}
.role{
    color:white;
}
.pic{
    width:250px;
    height:300px;
    margin-top:30px;
    margin-left:380px;
}
.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  color: #333333;
  background: #dddddd;
  border: none;
  outline: none;
  border-radius: 50%;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -10px;
  right: -10px;
  width: 25px;
  height: 25px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}
.card{
    border-radius: 55px;
    margin-bottom:4%;
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: #6C587B;
    transition: 0.3s;
 
}
.card2{
    border-radius: 55px;
    margin-bottom:4%;
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: #355C7D;
    transition: 0.3s;
 
}
.img{
    border-radius:25px;
    border: 2px solid purple;
}
</style>
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
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <h2> You are a : <?= $_SESSION['role']?></h2>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-dark navbar-dark">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-light">Helpdesk</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../asset/image/capture.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        
                        <span class="role">Procurement committee</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="procurement.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="complain3.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Put complaint</a>
                   
                    <a href="invoice_p.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Approve</a> 
                    <a href="invoice_2.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Summery</a> 
                    <a href="pList.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>List</a>
                     <!--<a href="pro.php" class="nav-item nav-link active "><i class="fa fa-tachometer-alt me-2"></i>Edit Password</a>-->
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a> 
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
<!-- Sales Chart Start -->
<!--<div class="container-fluid pt-4 px-4" width="10px" height="15px">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Sales Chart End -->

            <div class="container">
            <center> <img src="https://www.kindpng.com/picc/m/78-785975_icon-profile-bio-avatar-person-symbol-chat-icon.png" width="50" height="50"class="img" >&nbsp;
        <h6><font color="black">
        <?php
                    $sql = "SELECT emp_name from asset_user where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $emp_name=$row['emp_name'];
                           
                             echo  $emp_name ; 
                        }
                    }
                ?>
                
              </h6>
                </font>
<?php
       
       echo "Today is " . date("Y-m-d") . "<br>" ; 
       echo date('l.');
        ?></center><br>
            <div class="row justify-content-md-center">
                
               <!-- <div class="col-sm-4">
                    <div class="card bg-info">
                        <div class="card-body">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <h3 class="card-title text-white">Asset Users</h3>
                            <?php
                               /*$sql = "SELECT * from asset_user";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2"> '.$rowcount1.'</h1>';
                                }*/
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-success">
                        <div class="card-body">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <h3 class="card-title text-white">Complaints</h3>
                            <?php
                               /*$sql = "SELECT * from complain";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount2 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2"> '.$rowcount2.'</h1>';
                                }*/
                            ?>
                            
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4">
                    <div class="card bg-info">
                        <div class="card-body">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <h3 class="card-title text-white">Suppliers</h3>
                            <?php
                              /* $sql = "SELECT * from it_officer";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2"> '.$rowcount1.'</h1>';
                                }*/
                            ?>
                            
                        </div>
                    </div>
                </div>--><style>
                    .card{
                        margin-top:8px;
                    }
                    </style>
                <div class="col-sm-4">
                <div class="card2 ">
                        <div class="card-body">
                        <button type="button" class="icon-button">
    <span class="material-icons">notifications</span>
    <span class="icon-button__badge"><?php
                               $sql = "SELECT * from invoice";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo $rowcount1;
                                }
                            ?></span>
  </button>
                            <h3 class="card-title text-white"></br>Profoma Invoice</h3>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                <div class="card ">
                        <div class="card-body">
                        <button type="button" class="icon-button">
    <span class="material-icons">notifications</span>
    <span class="icon-button__badge"> <?php
                               $sql = "SELECT * from invoice where rec1=1";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo $rowcount1;
                                }
                            ?></span>
  </button>
                            <h3 class="card-title text-white">Recomend Profoma Invoice</h3>
                           
                            
                        </div>
                    </div>
                    </div>
                <div class="col-sm-4">
                <div class="card2 ">
                        <div class="card-body">
                        <button type="button" class="icon-button">
    <span class="material-icons">notifications</span>
    <span class="icon-button__badge"><?php
                               $sql = "SELECT * from invoice where rec1=0 ";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount2 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo $rowcount2;
                                }
                            ?></span>
  </button>
                            <h3 class="card-title text-white">Not Recomend Profoma Invoice</h3>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <img src="https://www.ru.ac.za/media/rhodesuniversity/content/library/documents/notices/IT_Helpdesk.jpg" class="pic">
        </div>
        
    </section>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>