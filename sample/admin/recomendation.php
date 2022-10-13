<?php  

session_start();

require("../connection/connect.php");
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
    .container{
        max-width: 1500px;
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
  margin-left:50%;
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
    color: Black;
 
 border:6px;
 width:75px;
 height:40px;
 border-radius:5px;
 font-weight:bold;
}
.btn1{
    color:red;
    font-weight:bold;
    
}
.btn2{
    color:green;
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
        
        <?php
                  /*  $sql = "SELECT emp_name from asset_user where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $emp_name=$row['emp_name'];
                           
                             echo 'Hello '. $emp_name. '..!!' ; 
                             
                        }
                    }*/
                ?>
    </nav>
    <?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
 
<button type="button" class="icon-button">
    
                            <span class="material-icons">notifications</span>
                            <span class="icon-button__badge"><?php
                               $sql = "SELECT * from invoice where recomend='0'";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo  $rowcount1;
                                }
                            ?></span>
                        </button>
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
                        
                        <span class="role">IT officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="recomend.php" class="nav-item nav-link  "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="complain1.php" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Put Complaint</a>
                <a href="user.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> User Role</a>
                <a href="recomendation.php" class="nav-item nav-link active" ><i class="fa fa-laptop me-2"></i>Profoma Invoice</a>
                <a href="final_report1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Invoice</a>
                <a href="invoice_5.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Invoice Summery</a>
                <a href="officer1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Officer List</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a> 
               <!--<a href="edit_profile.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>-->
               <!-- <a href="recomendation.php" class="nav-item nav-link active" ><i class="fa fa-laptop me-2"></i>Recomend</a>
                    
                    <a href="complainTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Complain List</a>
                    <a href="supplierTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Supplier List</a> 
                    <a href="procurementTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>Procurement List</a>
                    <a href="gmTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>General Manager</a>
                    <a href="officerTable1.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>It Officers</a> 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Invoice Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            <a href="invoice.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>Profoma Invoice</a>
                            
                            <a href="final_report.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>Final Report</a>
</ul>
                            
                        </div>
                    </div>
                    <a href="invoice.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Detail</a>  
                   <a href="email.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Put Email</a>
                    <a href="asset_table.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Table</a>-->
                     
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
        <!--<a href="dco.php" class="btn btn-info" role="button">Report</a>-->
        
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search wise invoice name or date" style="background-color:white">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!-- <div class="col-md-12">
                <div class="card mt-4">-->
                    <div class="card-body">
                        <table class="table table-bordered">
                           
                            <thead>
                                <tr bgcolor="CAF1DE">
                                
                                <th scope="col">ID</th>
                                <th scope="col">pdf</th>
                                <th scope="col">Date</th>
                        <th scope="col">Recomend BY</th>
                        <th scope="col">Procurement</th>
                        <th scope="col">GM </th>

                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                        
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM invoice WHERE CONCAT(pdf,date) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                
                                                    <td><?= $items['complain_id']; ?></td>
                                                    <td><?= $items['pdf']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                   
                                                    <td><?= $items['recomend_by']; ?></td>
                                                    
                                                    <td>
                 <?php 
             $rec1=$items['rec1'];
             
              if($rec1=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" ><br> </li></label>
             <?php
             }
             if($rec1=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" ></li></label></td>
             <?php 
             } 
             ?>
             </td>
             <td>
                 <?php 
             $approve=$items['approve'];
             
              if($approve=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" ><br> </li></label>
             <?php
             }
             if($approve=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" ></li></label></td>
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
                            
                        
                            <table class="table table-bordered">
    
  <hr>
                <thead>
                    <tr bgcolor="D4FOF7">
                    <th scope="col">Complaint ID</th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">Emp name</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Date&Time</th>
                    <th scope="col">Invoice</th>
                    <th scope="col">Refference No</th>
                    
                    <th scope="col">Amount</th>
                   
                    <th scope="col">Recomend status </th>
                    <th scope="col">Toogle</th>
                    <th scope="col">Operation</th>
                    <th scope="col">Add Reason</th>
                    <th scope="col">Recomend By</th>
                    <th scope="col">CheckOut status</th>
                    <th scope="col">Job Status</th>
                    </tr>
                </thead>
 
                <?php
            
            $sql = "SELECT * from complain inner join invoice ON complain.complain_id=invoice.complain_id ";
             $result=mysqli_query($con,$sql);
             if($result)
                 while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                            
                            <td><?php echo$complain_id= $row['complain_id'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                            <td><?php echo$date=$row['date'];?></td>
                            <td><?php echo$pdf=$row['pdf'];?></td>
                            <td><?php echo$refference_no= $row['refference_no'];?></td>
                            <td><?php echo$amount= $row['amount'];?></td>
                           
                              
                                <td>
                            

<?php 
// Usage of if-else statement to translate the 
// tinyint status value into some common terms
// 0-Inactive
// 1-Active
if($row['recomend']=="1") 
echo '<span style="color:green;text-align:center; font-weight:bold;">Recomend</span>';
else 
echo '<span style="color:red;text-align:center; font-weight:bold;">not-recomend</span>';
?>                          
</td>
<td>
<?php 
if($row['recomend']=="0") 

// if a course is active i.e. status is 1 
// the toggle button must be able to deactivate 
// we echo the hyperlink to the page "deactivate.php"
// in order to make it look like a button
// we use the appropriate css
// red-deactivate
// green- activate
echo 
"<a href=dactivate/cancel.php?complain_id=".$row['complain_id']." class='button white' >Recomend to PC</a>";
else 
echo
 "<i class='fa fa-check' aria-hidden='true'style=color:grey>done</i>";
//else 
//echo 
//"<a href=activate/recomand.php?id=".$row['id']." class='button white'>Job Done</a>";
?>
</td>    
<td> 
                            <!--<a href="delete/invoiceDelete.php?remove=<?=$row['id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                           
                           <i class="fa fa-trash" style=color:red></i>
                       </a>-->
                               
                     
                              <a  href="displayR.php?view=<?php echo $row['complain_id'];?>"><i class="fa fa-eye" aria-hidden="true" style=color:purple></i> </a>&emsp;
                              <a href="update/Redit.php?GetId=<?php echo  $complain_id ?>"><i class="fa fa-edit" style=color:green></i></a></td>        
                    
                 
                          
                                          
                        </td>  &nbsp;&nbsp;  
                            
                              <td><?php echo$reason=$row['reason']; ?>&emsp;</td>

                             
                              <td><?php echo$recomend_by=$row['recomend_by'];?>&emsp;</td>
                              <td><button><?php echo$checkout= $row['checkout'];?></button></td>
                              <td><button>
			 
             <?php 
             $change=$row['change'];
             
              if($change=="0")
             { ?>
          <label class="btn1">Process</label>
             <?php
             }
             if($change=="1")
             {
                             ?>
          <label class="btn2">Finish</label></td>
             <?php 
             } 
             ?></button>
             </td>
                              
                                <?php } ?>
                                
                                </tr>                             
                    </tbody>
                                </table>
                                
               
        </div>
    </section>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" ><i class="bi bi-arrow-up"></i></a>
       
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