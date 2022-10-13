
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Admin</title>
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
   body{
    background:white;
}
.container{
    max-width: 1000px;
    width: 400%;
    margin-left: 20%;
    margin-top: 55px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.role{
    color:white;
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
                        
                        <span class="role">Subject Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Complaint Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="complain2.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                            
                            <a href="complainTable.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>All complaint</a>
                            <!--<a href="complainReport.php" class="dropdown-item nav-link " ><i class="fa fa-laptop me-2"></i>Reports</a>-->
                        </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Invoice Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="invoice.php" class="dropdown-item nav-link active active"><i class='fas fa-file-invoice fa-lg'></i>Profoma Invoice</a>
                            
                            <a href="final_report.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Final Report</a>
                        </ul>
                        </div>
                    </div>
                    <a href="userTable.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Users</a>
                   
                    
                    <!--<a href="supplierTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Supplier List</a> 
                    <a href="procurementTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>Procurement List</a>
                    <a href="gmTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>General Manager</a>
                    <a href="officerTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Subject Officers</a> -->
                   
                    <a href="asset_table.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Asset Table</a> 
                    <!--<a href="ep.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>-->
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a> 
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        
            <?php
require("../connection/connect.php");
$result = mysqli_query($con,"select year(date) as year, month(date) as month, sum(amount) as total_amount
from invoice
group by year(date), month(date)");
?>

<div class="container">
    <caption><font size="5px"><center> Total Amount of Approved Profoma Invoices </center></font></caption><br>
    <table class="table table-bordered">
			<thead>
			  <tr bgcolor="#F0DEFD">
				<th>Year</th>
				<th>Month</th>
				<th>Amount</th>
			  </tr>
			</thead>
			<tbody>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	$monthNum  = $row["month"];
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('F');
?>
			  <tr>
				<td><?php echo $row["year"]; ?></td>
				<td><?php echo $monthName; ?></td>
				<td><?php echo $row["total_amount"]; ?></td>
			  </tr>
			  <?php
$i++;
}
?>
			</tbody>
  </table>
  <div class="text-center">
<button onclick="window.print()" class="btn btn-primary">Print</button>
                        </div>
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