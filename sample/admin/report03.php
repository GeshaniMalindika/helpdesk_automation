<?php  

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>recomend</title>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/complain.css" rel="stylesheet">
    <link href="css/recomend.css" rel="stylesheet">
</head>
<style>
    

    * {
    margin: 0;
    padding: 0
}

body{
    background:#DDDDDA;
}
.btn-area{
    height: 40px;
    margin: 2px 0;
    width:150px;
    margin-top:1px;
    margin-left: 75%;
}


.card p-4 {
    width: 200px;
    background-color: #efefef;
    border: none;
    align-items: center;
    cursor: pointer;
    transition: all 0.5s;
    justify-content: center;
    height:200px;
    margin-left: 5%;
    margin-top: 15%;
}
h3{
    color:Blue ;
    margin-top: 10px;
    align:center;
}
h1{
    color:Blue ;
    margin-top: 10px;
   margin-left:35%;
   font-size:8px;
}
.line{
    display: flex;
    margin-top: 5px;
    align-items: left;
    justify-content: left;
}

.button-group1{
    height: 40px;
    margin: 2px 0;
    width:200px;
    margin-top:1%;
    margin-left: 45%;
}
.button-group1 input{
    height: 100%;
    width: 20%;
    margin-top:-15%;
    margin-left: 35%;
    outline: none;
    color: #111;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    background-color: transparent;
    transition: all 0.3s ease;
}
.button-group1 input:hover{
    color: blue;
    background-color: #fff;
    font-family: 'nunito';
    font-weight: bold;
}
.container{
    max-width: 1300px;
    width: 300%;
    margin-left: 20%;
    margin-top: 35px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.a{
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  left:40%;
}

.a:hover {
  background-color: #769FCA;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
button.print-button {
  width: 100px;
  height: 100px;
}
span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  border: solid 4px #333;
}
span.print-icon::after {
  border-width: 2px;
}

button.print-button {
  position: relative;
  padding: 0;
  border: 0;
  
  border: none;
  background: transparent;
}

span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  box-sizing: border-box;
  background-color: #fff;
}

span.print-icon {
  position: relative;
  display: inline-block;  
  padding: 0;
  margin-top: 20%;

  width: 60%;
  height: 35%;
  background: #fff;
  border-radius: 20% 20% 0 0;
}

span.print-icon::before {
  content: " ";
  position: absolute;
  bottom: 100%;
  left: 12%;
  right: 12%;
  height: 110%;

  transition: height .2s .15s;
}

span.print-icon::after {
  content: " ";
  position: absolute;
  top: 55%;
  left: 12%;
  right: 12%;
  height: 0%;
  background: #fff;
  background-repeat: no-repeat;
  background-size: 70% 90%;
  background-position: center;
  background-image: linear-gradient(
    to top,
    #fff 0, #fff 14%,
    #333 14%, #333 28%,
    #fff 28%, #fff 42%,
    #333 42%, #333 56%,
    #fff 56%, #fff 70%,
    #333 70%, #333 84%,
    #fff 84%, #fff 100%
  );

  transition: height .2s, border-width 0s .2s, width 0s .2s;
}

button.print-button:hover {
  cursor: pointer;
}

button.print-button:hover .print-icon::before {
  height:0px;
  transition: height .2s;
}
button.print-button:hover .print-icon::after {
  height:120%;
  transition: height .2s .15s, border-width 0s .16s;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #498D87;
  color: black;
  margin-left:80%;
}
button{
  color:black;
 background:#ffcad4;
 border:6px;
 width:75px;
 height:40px;
 border-radius:5px;
 font-weight:bold;
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
    <?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>

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
                        
                        <span class="role">Subject Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="dashboard.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                                <a href="complain2.php" class="dropdown-item nav-link active "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                                <a href="complainTable.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>All complaint & upload </a>
                                <a href="invoice.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>Upload Invoice</a>
                                <a href="invoice1.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Invoice Details</a>
                               
                                <a href="userTable.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> Users</a>
                                <a href="asset_table.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Asset Table</a>
                                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        </div>
<section>
<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;
&emsp;<a  href="complain2.php" ><i class="fa fa-angle-left" style="font-size:46px"></i></a>
<div class="container">
           
          
        
<center>
        <table class="table table-bordered">
         
        <!--<table class="table">--> 
                 
                <thead>
                    <tr bgcolor="#CAF1DE">
                        <th scope="col" >Complaint ID</th>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Date&Time</th>
                        <th scope="col">Asset ID</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">CheckOut</th>
                        <th scope="col">Status</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php
            
            $sql = "SELECT * from complain where username = '".$_SESSION['username']."'";
             $result=mysqli_query($con,$sql);
             if($result)
                 while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                            <td><?php echo $complain_id=$row['complain_id'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$title=$row['title'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$contact_no=$row['contact_no'];?></td>
                            <td><?php echo$username=$row['username'];?></td>
                            <td><?php echo$unit=$row['unit'];?></td>
                            <td><?php echo$date=$row['date'];?></td>
                            <td><?php echo$asset_id=$row['asset_id'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                            <td><button><?php echo$checkout=$row['checkout'];?></button></td>
                           <!-- <td>
                            <a href="delete/delete-process1.php?complain_id=<?php echo $row["complain_id"]; ?>"><i class="fa fa-trash" style=color:purple></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                            <a href="update/rEdit1.php?GetId=<?php echo  $complain_id ?>"><i class="fa fa-edit" style=color:green></i></a>&nbsp;&nbsp;&nbsp;
                                
                       </a>
                 </td>
                 -->
                 <td>
			 
             <?php 
             $change=$row['change'];
             
              if($change=="0")
             { ?>
          <label class="btn btn-danger">Process</label>
             <?php
             }
             if($change=="1")
             {
                             ?>
          <label class="btn btn-success">Finish</label></td>
             <?php 
             } 
             ?>
             </td>
                 
                            <?php } 
                           
                           ?>                           
 </tr>
 
   </tbody>
   
     </table>
     
     </center>
     </div>
    <center> <button onclick="window.print();return false"
    class="print-button"> <span class="print-icon"></span></button></center>
    </section>
    
    
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