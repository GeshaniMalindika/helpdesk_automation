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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/complain.css" rel="stylesheet">
</head>
<style>
    .container{
    max-width: 1100px;
    width: 500%;
    margin-left: 25%;
    margin-top: 25px;
    background: #fff;
    padding: 15px 30px;
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
.role{
    color:white;
}
hr{
    border:5px solid black;
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
                                <a href="invoice.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>Upload Invoice</a>
                                <a href="invoice1.php" class="dropdown-item nav-link "><i class='fas fa-file-invoice fa-lg'></i>Invoice Details</a>
                              
                                <a href="userTable.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> Users</a>
                                <a href="asset_table.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Asset Table</a>
                                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>
                    </div>
                    <!--<a href="ep.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>-->
                    <!--<a href="supplierTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Supplier List</a> 
                    <a href="procurementTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>Procurement List</a>
                    <a href="gmTable.php" class="nav-item nav-link"><i class="bi bi-clipboard-data me-2"></i>General Manager</a>
                    <a href="officerTable.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>subject Officers</a>-->
                        
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End-->


        <!-- Content Start -->
        <?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:dashbord.php");
    }
?>
    <section>
        
        <div class="container">
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
                                <tr bgcolor="#CAF1DE">
                                
                                <th scope="col">Reginal Office</th>
                                <th scope="col">Office</th>
                                <th scope="col">Asset_id</th>
                        <th scope="col">Asset_Brand</th>
                        <th scope="col">Asset_model</th>
                        <th scope="col">Serial_no </th>
                        <th scope="col">Operation </th>
                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                        
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM asset WHERE CONCAT(asset_id,serial_no) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                
                                                    <td><?= $items['devision']; ?></td>
                                                    <td><?= $items['office']; ?></td>
                                                    <td><?= $items['asset_id']; ?></td>
                                                   
                                                    <td><?= $items['brand']; ?></td>
                                                    <td><?= $items['model']; ?></td>
                                                    <td><?= $items['serial_no']; ?></td>
                                                    <td> <a href="update/Aedit.php?GetId=<?php echo  $asset_id ?>"><i class="fa fa-edit" style=color:green></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="delete/assetDelete.php?remove=<?=$row['asset_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                           
                           <i class="fa fa-trash" style=color:red></i>
                       </a></td>
                                                    
                                                   
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
                                <hr>
                                <a id="button" href="asset.php">Add asset</a><br><br>
        <div class="table-responsive">          
  <table class="table">
      
                <thead>
                    <tr bgcolor="grey">
                    
                    <th scope="col">Reginal Office</th>
                    <th scope="col">Office</th>
                        <th scope="col">Asset_id</th>
                       
                        <th scope="col">Asset_Brand</th>
                        <th scope="col">Asset_model</th>
                        
                        <th scope="col">Serial_no</th>
                        <th scope="col">Operation</th>
                        
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql="select * from `asset`";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <tbody>
                            <td><?php echo $devision=$row['devision'];?></td>
                           <td><?php echo$office=$row['office'];?></td>
                           <td><?php echo$asset_id=$row['asset_id'];?></td>
                           <td><?php echo$brand=$row['brand'];?></td>
                           <td><?php echo$model=$row['model'];?></td>
                           <td><?php echo$serial_no=$row['serial_no']; ?></td>

                            
                            
                           <td>    <a href="update/Aedit.php?GetId=<?php echo  $asset_id ?>"><i class="fa fa-edit" style=color:green></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="delete/assetDelete.php?remove=<?=$row['asset_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                           
                           <i class="fa fa-trash" style=color:red></i>
                       </a></td>
                                
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