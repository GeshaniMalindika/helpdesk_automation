<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>report</title>
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
.container{
    max-width: 1600px;
    width: 300%;
    margin-left: 15%;
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
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:38px;

}
#viewB{
    display:inline-block;
    background-color:#B7AFA3;
    color:black;
    padding:5px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:48px;

}

   

    
.button{
    display:inline-block;
    background-color:#bBa9c9;
    color:white;
    padding:8px;
    
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:48px;
    border:none;
}

#button1{
    display:inline-block;
    background-color:#cc0000;
    color:black;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:48px;

}


.role{
    color:white;
}      
.h{
    font-size:25px;
    color:purple;
    margin-left:25%;
   
}
hr{
  border: 10px solid black;
  border-radius: 5px;
}
.b1{
    display:inline-block;
    background-color:#8AEEDF;
    color:black;
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-size:13px;
    text-decoration:none;
    border-radius:4px;
    width:85px;
    height:48px;
  font-weight:bold;


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
                                <a href="complain2.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                                <a href="complainTable.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>All complaint</a>
                                <a href="invoice.php" class="dropdown-item nav-link active"><i class='fas fa-file-invoice fa-lg'></i>Upload Invoice</a>
                                <a href="invoice1.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i> Invoice Details</a>
                               
                                <a href="userTable.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> Users</a>
                                <a href="asset_table.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Asset Table</a>
                                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>
                <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Complaint Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                           
                            <a href="complainReport.php" class="dropdown-item nav-link " ><i class="fa fa-laptop me-2"></i>Reports</a>
                        </ul>
                        </div>
                    </div>-->
                            
                   <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Invoice Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <ul>
                            
</ul>
                            
                        </div>
                    </div>-->
                      <!--<a href="document.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg' S></i>Summary Report</a>-->
                  
                    
                    <!--<a href="supplierTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Supplier List</a> 
                    <a href="procurementTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>Procurement List</a>
                    <a href="gmTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>General Manager</a>
                    <a href="officerTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Subject Officers</a> -->
                    
                    <!--<a href="invoice.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Detail</a>  -->
                    <!--<a href="email.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Put Email</a>  
                <a href="ep.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>-->
                      
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
<center><button type="button" class="icon-button">
                            <span class="material-icons">notifications</span>
                            <span class="icon-button__badge"><?php
                               $sql = "SELECT * from invoice where pdf=null";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   
                                   echo  $rowcount1;
                                }
                            ?></span>
                        </button> 
                        </center>
    <section>
    
        <div class="container">
        

        <?php
                               $sql = "SELECT * from invoice where amount=?";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $sum = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo  $sum;
                                }
                            ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data" style="background-color:white">
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
                                <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">pdf</th>
                                <th scope="col">Date</th>
                                
                                <th scope="col">IT officer </th>
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
                                        $query = "SELECT * FROM invoice WHERE CONCAT(complain_id) LIKE '%$filtervalues%' ";
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
                                                    
                                                    
                                                    
                                                    <td>
                 <?php 
             $recomend=$items['recomend'];
             
              if($recomend=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" ><br> </li></label>
             <?php
             }
             if($recomend=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" ></li></label></td>
             <?php 
             } 
             ?>
             </td>
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
                            
                        
        <div class="table-responsive">     
                 
  <table class="table">
  <hr>
  
 
                                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col"> Id</th>
                    <th scope="col">Complain Id</th>
                    <th scope="col">emp_name</th>
                    <th scope="col">emp_id</th>
                    <th scope="col">unit</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">Refference No</th>
                        <!--<th scope="col">Amount Within VAT</th>-->
                        <th scope="col">View profoma inv:</th>
                       
                        <th scope="col">IT Recomend </th>
                        
                        <th scope="col">Procurement Recomend  </th>
                        <th scope="col">GM approval</th>
                        <th scope="col">View invoice</th>
                       <!-- <th scope="col">Add amount</th>-->
                       
                        <th scope="col">Upload Invoice</th>
                        <th scope="col">Delete Invoice</th>
                        <th scope="col">Invoice Name</th>
                        <th scope="col">Uploaded Date&Time</th>
                        
                    </tr>
                </thead>
 
                <?php
            
           // $sql = "SELECT * from invoice  ";
           //$sql = "SELECT * from complain inner join invoice ON complain.complain_id=invoice.complain_id ";
           $sql="SELECT * FROM complain left JOIN invoice ON complain.complain_id = invoice.complain_id left JOIN f_invoice ON invoice.complain_id = f_invoice.complain_id";
             $result=mysqli_query($con,$sql);
             $i=1;
             if($result)
                 while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                    <th><?php echo$i++;?></th>
                            <th><?php echo$complain_id= $row['complain_id'];?></th>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$unit=$row['unit'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                            <td><?php echo$refference_no=$row['refference_no'];?></td>
                            <!--<td>&nbsp;&nbsp;<?php echo$amount=$row['amount'];?></td>-->
                           <td> &emsp;&emsp;<a  href="display_pdf1.php?view=<?php echo $row['complain_id'];?>"><i class="fa fa-eye" aria-hidden="true" style=color:purple></i> </a></label></td>
                            
 <!--It officer-->          
                 <td>
                 <?php 
             $recomend=$row['recomend'];
             
              if($recomend=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" >Not </li></label>
             <?php
             }
             if($recomend=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" >Done</li></label></td>
             <?php 
             } 
             ?>
           
            </td>
            
           
           
<!--Procurement-->
            <td>
                 <?php 
             $rec1=$row['rec1'];
             
              if($rec1=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" >&nbsp;&nbsp; Not</li></label>
             <?php
             }
             if($rec1=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" >Done</li></label></td>
             <?php 
             } 
             ?>
             </td>
        <!--general manager-->
             <td>
                 <?php 
             $approve=$row['approve'];
             
              if($approve=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" >&nbsp;&nbsp; Not</li></label>
             <?php
             }
             if($approve=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" >Done</li></label></td>
             <?php 
             } 
             ?>
             </td>
             </td>  &nbsp;&nbsp;  
             <td> 
             <!--<a href="delete/invoiceDelete.php?remove=
             <?=$row['id'] ?>
             " onclick="return confirm('are you sure want to remove this item?');">
               <i class="fa fa-trash" style=color:red></i>
             </a>-->
                    &nbsp;&nbsp; 
                    <a  href="display_pdf.php?view=<?php echo $row['complain_id'];?>"><i class="fa fa-eye" aria-hidden="true" style=color:purple></i> </a></label>&nbsp;&nbsp;&nbsp;</td>
                    <!--<td>&nbsp;&nbsp;&nbsp;<a href="update/inEdit.php?GetId=<?php echo  $complain_id ?>"><i class="fa fa-edit" style=color:green></i></a>
                    </td>-->
                     
                    
            </td>
            <td> 
             <?php 
            
             $approve=$row['approve'];
             if($approve==1)
             
             {
                echo '<a href="picupload/f_invoice.php?GetId=<?php echo  $emp_id ?>">&emsp;&emsp;<i class="fa fa-upload" aria-hidden="true" style=color:purple></i></a>';
             }
                 else
                 {
                 echo '<button type="button1" class="b1" disabled>Can t upload</button>';
                 }
             ?>    
            
            </td>
            <td>

&emsp;<a href="picupload/f_invoiceDelete.php?remove=<?=$row['complain_id'] ?>" onclick="return confirm('are you sure want to remove this item?');"><i class="fa fa-trash" style=color:red></i>
                       </a>
                </td>
                <td><?php echo$pdf=$row['pdf'];?></td>
                <td><?php echo$date=$row['date'];?></td>
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