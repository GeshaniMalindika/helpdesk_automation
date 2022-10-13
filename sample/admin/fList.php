<!DOCTYPE html>
<html lang="en">
<?php  

session_start();

?>

<head>
    <meta charset="utf-8">
    <title>Recomend</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/complain.css" rel="stylesheet">
   
   
</head>
<style>
    .role{
    color:white;
}
    .container{
    max-width: 1000px;
    width: 300%;
    margin-left: 30%;
    margin-top: 15px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
body{
    background:#DDDDDA;
}
#button{
    display:inline-block;
    background-color:purple;
    color:white;
    padding:5px;
    text-align:center;
    font-family:verdana;
    font-size:15px;
    text-decoration:none;
    border-radius:4px;
    width:135px;
    height:50px;

}
#button2{
    display:inline-block;
    background-color:#008040;
    color:white;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:38px;

}
#button1{
    display:inline-block;
    background-color:#cc0000;
    color:white;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:38px;

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
                        
                        <span class="role">Invoice Recomend</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="finance.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="complain5.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>put Complaint</a>
                    <a href="invoice_f.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice</a> 
                                
                    <a href="invoice_4.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Summery</a> 
                    <a href="fList.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>List</a>   
                    <!--<a href="picupload/invoice.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Upload Profoma Invoice</a> 
                    <a href="picupload/f_invoice.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Upload Invoice</a> -->
                   
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
    <section>
        <div class="container">
        <!--<a id="button" href="register/register_r.php">Add IT officer</a><br><br>-->
        <div class="table-responsive">          
  <table class="table">
                <thead>
                    <tr bgcolor="#CAF1DE">
                        <th scope="col">Reg No</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Devision</th>
                        <!--<th scope="col">Operation</th>-->
                        <th scope="col">Role</th>
                        
                    </tr>
                </thead>
                

                    <?php
                    $sql="select * from `asset_user` where user_type='finance'";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <tbody>

                            <td><?php echo $emp_id=$row['emp_id'];?></td>
                            <td><?php echo$name=$row['emp_name'];?></td>
                            <td><?php echo$contact_no=$row['contact_no'];?></td>
                            <td><?php echo$username=$row['username'];?></td>
                            <td><?php echo$address=$row['address'];?></td>
                           
                            <td><?php echo$devision=$row['devision'];?></td>
                           
                               <!-- <td>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update/orEdit.php?GetId=<?php echo  $emp_id ?>"><i class="fa fa-edit" style=color:green></i></a>
                           <a href="delete/officerDelete.php?remove=<?=$row['emp_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                           
                            <i class="fa fa-trash" style=color:red></i>
                        </button></a>-->
                            </td>
                            <td><?php echo$user_type=$row['user_type'];?></td>
                            
                                <?php } ?>

                                
                            
                            </tr>

                </tbody>
            </table>
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