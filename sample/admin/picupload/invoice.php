<?php
        
 include('config/db.php');
 if(isset($_FILES['image'])){
    $error=array(); 
     $complain_id=$_POST['complain_id'];
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    
    $file_ext= $_FILES['image']['name'];
 }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Supplier</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./../img/favicon.ico" rel="icon">

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
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/complain.css" rel="stylesheet">
</head>
<style>
    #content{
    width: 70%;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    border: 2px solid #cbcbcb;
    margin-top: 10%;
    
}
.container{
    max-width: 595px;
    width: 100%;
    margin-left: 37%;
    margin-top: 91px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 5px 15px 15px rgb(70, 63, 63);
}
.title{
    color: #2d4d5f;
}
.container .title{
    font-size: 25px;
    font-weight: 500;
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
.form{
    width: 200%;
    height:70px;
    margin: 50px 20px;
    font-family:arial;
}
body{
    background:#DDDDDA;
}
#button{
    display:inline-block;
    background-color:purple;
    color:white;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:18px;
    text-decoration:none;
    border-radius:4px;
    width:125px;
    height:58px;

}

#button1{
    display:inline-block;
    background-color:red;
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

#button2{
    display:inline-block;
    background-color:green;
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

.h1{
        border: 2px solid black;
        width: 600px;
        margin-left: 600px;
        margin-top: 50px;
        padding: 30px;
        font-size:18px;
        
      }
      
     .form input[type="submit"]{
position: relative;
  top: 62px;
  background: #8f8d8d;
  border: 0px;
  padding: 10px;
  color: white;
  font-weight: bold;
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
        margin-left:15%;
        margin-right:30%;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 20%;
        border-radius:15px;
      }
.input-box{
        margin-left:80%;
      }
      .role{
    color:white;
}
#image{
  top:18%;
  left:37%;
  right:5%;
  bottom:0;
  position:absolute;
}
.complain{
    width:120px;
    height:30px;
    font-size:20px;


}


    </style>

<body>
    
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

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <!--<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-dark navbar-dark">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-light">Helpdesk</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../../asset/image/capture.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        
                        <span class="role">Subject Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Complaint Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="../complain2.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                            
                            <a href="../complainTable.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>All complaint</a>
                            
                        </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Invoice Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="../invoice.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Profoma Invoice</a>
                           
                            <a href="../final_report.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Final Report</a>
                        </ul>
                        </div>
                    </div>
                    <a href="../userTable.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Users</a>
                   
                    
                    <a href="supplierTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Supplier List</a> 
                    <a href="procurementTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>Procurement List</a>
                    <a href="gmTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>General Manager</a>
                    <a href="officerTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Subject Officers</a> 
                    
                    <a href="../asset_table.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Asset Table</a> 
                    <a href="ep.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>
                    <a href="../logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>  
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        </div>-->
        <!-- Sidebar End -->


        <!-- Content Start -->
        <?php
    require("./../../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:./../dashbord.php");
    }
?>
<section>


<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;<!--previous page</button>-->
<a  href="../complainTable.php" ><i class="fa fa-angle-left" style="font-size:46px"><i class="fa fa-angle-left" style="font-size:46px"><i class="fa fa-angle-left" style="font-size:46px"></i></i></i></a>

<center>
<!--<div id="image">
        <img src="image/invoice.png" style="width:60px; height:67">
      </div>-->

<div class="h1">
<form class="" action="" method="post" enctype="multipart/form-data" align="left">
      <label for="">Enter Complain Id</label>
      <input  type="text" name="complain_id"  class="complain" required><br><br>

        <label for="">Upload Your Invoice<br> (Only PDF)</label>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
       <center> <input id="upload" type="submit" name="submit" value="Upload"></center>
        <?php
        include('config/db.php');

        if (isset($_POST['submit'])) {
          $complain_id=$_POST['complain_id'];
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $extensions=array("pdf");
          $file_ext= $_FILES['pdf']['name'];
          $pdf_store="./uploads/".$pdf;
          move_uploaded_file($pdf_tem_loc,$pdf_store);
         
          if(in_array($file_ext,$extensions)==false){

            if(empty($error)==true){
                move_uploaded_file($pdf_tem_loc,$pdf_store);

                $pdf_store="./uploads/".$pdf;
                $sql="INSERT INTO invoice(complain_id,pdf) values('$complain_id','$pdf')";
                $query=mysqli_query($conn,$sql);

            
            }
            
            }
        
          /*move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO invo(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);*/

        

        }



         ?>
         </form>

      
    </div>

<div class="input-box">
                    <span class="details">Date and Time</span>
                   
                    <?php
                       // Set the new timezone
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date('d-m-y h:i:s');
                         echo $date;
                          ?>
                    </div>
                    </section>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   
    
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