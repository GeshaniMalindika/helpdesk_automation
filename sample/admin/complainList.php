
<!DOCTYPE html>
<html>

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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    .container{
    max-width: 1500px;
    width: 100%;
    margin-left: 17%;
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
  width: 100%;
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
  border: 10px solid black;
  border-radius: 5px;
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
                
                <div class="navbar-nav w-100">
                <a href="recomend.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="complain1.php" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Asset Complaint</a>
                <a href="user.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> User Role</a>
                <!--<a href="edit_profile.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> Change password</a> -->
                <a href="complainList.php" class="nav-item nav-link active"><i class="fa fa-laptop me-2"></i> User Complaints</a>
                <a href="officer1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Officer List</a>
                <a href="recomendation.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Profoma Invoice</a>
                <a href="final_report1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Invoice</a>
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
     
  
       
            <div class="col-md-12">
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" placeholder="Search wise date/unit/complaint_id.... " required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data"  style="background-color:white">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <!--<div class="card mt-4">
                    <div class="card-body">-->
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Complain Id</th>
                                <th scope="col">Emp Id</th>
                                <th scope="col">Emp Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Asset No</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                       
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM complain WHERE CONCAT(date,unit,complain_id) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                
                                                    <td><?= $items['complain_id']; ?></td>
                                                    <td><?= $items['emp_id']; ?></td>
                                                    <td><?= $items['emp_name']; ?></td>
                                                    <td><?= $items['contact_no']; ?></td>
                                                    <td><?= $items['username']; ?></td>
                                                    <td><?= $items['unit']; ?></td>
                                                    <td><?= $items['asset_id']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    <td>
			 
             <?php 
             $status=$items['status'];
             
              if($status=="0")
             { ?>
          <label class="btn btn-danger">Process</label>
             <?php
             }
             if($status=="1")
             {
                             ?>
          <label class="btn btn-success">Finish</label></td>
             <?php 
             } 
             ?>
             </td>
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
                            <div class="row">           
               <div>    
              
        <div class="table-responsive">          
  <table class="table">
  <hr>
                 <thead class="thead-dark">
                    <tr>
                        <th scope="col">Complaint ID</th>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Unit</th>
                         <th scope="col">Complaint</th>
                        <th scope="col">Asset ID</th>
                       
                        <th scope="col">Date&Time</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                

                    <?php
                    $sql="select * from `complain`";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                        
                    
                ?>
                <tbody>
                            <td><?php echo $row['complain_id'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$title=$row['title'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$contact_no=$row['contact_no'];?></td>
                            <td><?php echo$username=$row['username'];?></td>
                            <td><?php echo$unit=$row['unit'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                            <td><?php echo$asset_id=$row['asset_id'];?></td>
                            
                            <td><?php echo$date=$row['date'];?></td>
                            
                            <td>
			 
             <?php 
             $status=$row['status'];
             
              if($status=="0")
             { ?>
          <label class="btn btn-danger">Process</label>
             <?php
             }
             if($status=="1")
             {
                             ?>
          <label class="btn btn-success">Finish</label></td>
             <?php 
             } 
             ?>
             </td>
                           
                           <!-- <td>

                            <?php 
                        // Usage of if-else statement to translate the 
                        // tinyint status value into some common terms
                        // 0-Inactive
                        // 1-Active
                        if($row['status']=="1") 
                            echo'<span style="color:green; text-align:center;">Finish</span>';
                        else 
                            echo '<span style="color:red; text-align:center;">Process</span>';
                    ?>                          
                </td>
                <td>
                    <?php 
                    if($row['status']=="0") 
  
                        // if a course is active i.e. status is 1 
                        // the toggle button must be able to deactivate 
                        // we echo the hyperlink to the page "deactivate.php"
                        // in order to make it look like a button
                        // we use the appropriate css
                        // red-deactivate
                        // green- activate
                        echo 
                    "<a href=dactivate/deactivate.php?complain_id=".$row['complain_id']." class='button white'>Job Done</a>";
                    //else 
                        //echo 
                      // "<a href=activate/activate.php?complain_id=".$row['complain_id']." class='button white'>Job Done</a>";
                    ?>
                        </td>    
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                                <a href="delete/complainDelete.php?remove=<?=$row['complain_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                            
                                <i class="fa fa-trash" style=color:red></i>
                        </button></a>
                            </td>-->
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