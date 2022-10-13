
<!DOCTYPE html>
<html>

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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<style>
    .container{
    max-width: 1900px;
    width: 100%;
    margin-left: 15%;
    margin-top: 15px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    
}
.container1{
    max-width: 1300px;
    width: 400%;
    margin-left: 2%;
    margin-top: 15px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
body{
    background:#DDDDDA;
}
.button{
    display:inline-block;
    background-color:#bBa9c9;
    color:black;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:38px;
    border:none;
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

.green{
            background-color:#BBEDBE;
            
        }
        .red{
            background-color:  #F1B9AC;
        }
        .purple{
            background-color: purple;
        }
        .role{
    color:white;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 105%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 40%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
hr {
  border: 10px solid #DA0757;
  border-radius: 5px;
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
  margin-top:10px;
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

button{
    color: green;
 background:#ACDDDE;
 border:6px;
 width:75px;
 height:40px;
 border-radius:5px;
 font-weight:bold;
 
}
.btn{
    font:yellow;
    font-weight:bold;
}
h4{
    color:black;
}
/*Resize the wrap to see the search bar change!*/

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
    
?>
  <center> <h4 class="card-title text-black" ><br>Not noted Complaints</h4> <button type="button" class="icon-button">
                            <span class="material-icons">notifications</span>
                            <span class="icon-button__badge"><?php
                               $sql = "SELECT * from complain where checkout='not noted'";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   
                                   echo  $rowcount1;
                                }
                            ?></span>
                        </button> 
                        </center>
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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Complaint Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="complain2.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                            
                            <a href="complainTable.php" class="dropdown-item nav-link active"><i class='fas fa-file-invoice fa-lg'></i>All complaint</a>
                            <!--<a href="complainReport.php" class="dropdown-item nav-link " ><i class="fa fa-laptop me-2"></i>Reports</a>-->
                        </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Invoice Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="invoice.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Profoma Invoice</a>
                            
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
     
  <button><a href="complainReport.php">report</a></button>
  <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" placeholder="Search Serial No...." required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data"  style="background-color:white">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                
                                <div class="col-md-12">
                                <table class="table table-bordered">
                            <thead>
                                <tr bgcolor="#498D87">
                                <th scope="col">Asset ID</th>
                                <th scope="col">Serial NO</th>
                                <th scope="col">Asset_Brand</th>
                                <th scope="col">Asset_model</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                       
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT asset_id,serial_no,brand,model FROM asset WHERE CONCAT(asset_id,serial_no) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                
                                                    <td><?= $items['asset_id']; ?></td>
                                                    <td><?= $items['serial_no']; ?></td>
                                                    <td><?= $items['brand']; ?></td>
                                                    <td><?= $items['model']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                
                               
                                </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <!--<div class="card mt-4">
                    <div class="card-body">-->
                    
                        
                                
                                
       
   <!-- Suggestions will be displayed in below div. -->
   <!--<div id="display"></div>-->
<!--<input type="search" class="light-table-filter form-control" data-table="table" placeholder="Search Here ">

                            <script>
                                (function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
                            </script>-->
                           
              
               <table class="table table-bordered">
  <hr>
                 <thead class="thead-dark">
                    <tr bgcolor="#CAF1DE">
                    <th scope="col"> ID</th>
                        <th scope="col">Complaint ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Reference No</th>
                        <th scope="col">Upload Invoice </th>
                        <th scope="col">Name</th>
                       <!-- <th scope="col">Upload eng:spec</th>
                        <th scope="col">Upload Invoice</th>
                        <th scope="col">Name</th>-->
                    </tr>
                </thead>
                

                    <?php
                    //$sql = "SELECT * from complain  order by complain_id DESC ";
                $sql = "SELECT * from complain left join f_invoice ON complain.complain_id=f_invoice.complain_id ";
//$sql="SELECT * from complain outer join invoice ON complain.complain_id = invoice.complain_id outer join f_invoice ON invoice.complain_id=f_invoice.complain_id ";
                //SELECT t1.col, t3.col
//FROM table1
//JOIN table2 ON table1.primarykey = table2.foreignkey
//JOIN table3 ON table2.primarykey = table3.foreignkey

//Read more: https://javarevisited.blogspot.com/2012/11/how-to-join-three-tables-in-sql-query-mysql-sqlserver.html#ixzz7gUMzeYq3
               // $sql="SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName FROM ((Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID) INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID)";

                    $result=mysqli_query($con,$sql);
                    $i=1;
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                        
                    
                ?>
                <tbody>
                            <td><?php echo $i++?> </td>
                            <td><?php echo$complain_id= $row['complain_id'];?></td>
                            
                            
                            <td><?php echo$date=$row['date'];?></td>
                            <td><?php echo$refference_no=$row['refference_no'];?></td>
                            <td><a href="picupload/f_invoice.php?GetId=<?php echo  $emp_id ?>">&emsp;&emsp;&emsp;<i class="fa fa-upload" aria-hidden="true" style=color:purple></a></td>
                            
                            <td><?php echo$pdf=$row['pdf'];?></td>
                           
                           
                            
                           
                        
                                <?php } ?>
                            </tr>
                            
            
                                
                        </div>
                                   
                            
</tbody>
                                </table>
                                <div class="text-center">
<button onclick="window.print()" class="btn btn-primary">Print</button>
                        </div>
               
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