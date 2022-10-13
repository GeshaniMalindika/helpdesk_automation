<!DOCTYPE html>
<html lang="en">

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
    width:35px;
    height:38px;
    margin-left:20%;

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
    height:38px;
    border:none;
}
.green{
    background-color: #457598;
    
}
.red{
    background-color:  #6C5B7B;
}
body{
    background:#DDDDDA;
}
.role{
    color:white;
}
hr {
  border: 10px solid black;
  border-radius: 5px;
}
.h{
    font-size:28px;
    margin-left:30%;
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
                        
                        <span class="role"> IT Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="recomend.php" class="nav-item nav-link  "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="complain1.php" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Put Complaint</a>
                <a href="user.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i> User Role</a>
                <a href="recomendation.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Profoma Invoice</a>
                <a href="final_report1.php" class="nav-item nav-link active" ><i class="fa fa-laptop me-2"></i>Invoice</a>
                <a href="invoice_5.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Invoice Summery</a>
                <a href="officer1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Officer List</a>
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
                                <tr bgcolor="CAF1DE">
                                
                                <th scope="col">Complaint ID</th>
                                <th scope="col">pdf</th>
                                <th scope="col">Date</th>
                                <th scope="col">Officer Recomend </th>
                                <th scope="col">Finance Status </th>
                                <th scope="col">Amount</th>
                                
                                

                                </tr>
                                
                                <!--<tr> <th colspan="?">Total</th></tr>-->
                            </thead>
                            <tbody>
                           
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                        
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * from f_invoice  WHERE CONCAT(pdf,date) LIKE '%$filtervalues%' ";
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
             $recomendation=$items['recomendation'];
             
              if($recomendation=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" ><br> </li></label>
             <?php
             }
             if($recomendation=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" ></li></label></td>
             <?php 
             } 
             ?>

             </td>
                                                    
                                                    <td>
                 <?php 
             $status=$items['status'];
             
              if($status=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" ><br> </li></label>
             <?php
             }
             if($status=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" ></li></label></td>
             <?php 
             } 
             ?>

             </td>
             <td><?= $items['amount']; ?></td>
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
                            
        
        
               
  <table class="table">
  <hr> 
  
  <?php
//servername
/*$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//geek is the database name
$dbname = "helpdesk1";
 
// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);

//sql query
$sql = "SELECT  SUM(amount) from f_invoice where date between '2022-08-01' AND '2022-09-01'";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo "This month Total cost: Rs. ". $row['SUM(amount)'];
    echo "<br>";
}
 

 
 
//close the connection
 
$conn->close();*/
?>
  <div class="table table-bordered">     
                <thead>
                    <tr bgcolor="D4FOF7">
                    <th scope="col">Complaint ID</th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">Emp name</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Date&Time</th>
                    <th scope="col">Invoice</th>
                        <th scope="col">Amount</th>
                       
                        <th scope="col">Recommend</th>
                       <th scope="col">Toogle</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                

                    <?php
                     $sql = "SELECT * from complain inner join f_invoice ON complain.complain_id=f_invoice.complain_id ";
                    //$sql="select * from `f_invoice` where status='1' ";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                <tbody>
                <th><?php echo$complain_id= $row['complain_id'];?></th>
                <td><?php echo$emp_id=$row['emp_id'];?></td>
                <td><?php echo$emp_name=$row['emp_name'];?></td>
                <td><?php echo$description=$row['description'];?></td>
                <td><?php echo$date=$row['date'];?></td>
                            <td><?php echo$pdf=$row['pdf'];?></td>
                            <td><?php echo$amount=$row['amount'];?></td>
                            <td><?php 

                    if($row['recomendation']=="1") 
                    echo '<span style="color:green;text-align:center;">Recomend</span>';
                    else 
                    echo '<span style="color:red;text-align:center;">not-recomend</span>';
                    ?>                          
                    </td>
                    <td>
                    <?php 
                    if($row['recomendation']=="0") 

                    echo 
                    "<a href=dactivate/not.php?complain_id=".$row['complain_id']." class='button white' >Job Done</a>";
                    else 
                    echo
                    "<i class='fa fa-check' aria-hidden='true'style=color:grey>done</i>";

                    ?>
                    </td>    
                            <!--<td>

                            <?php 
                       // $status=$row['status'];
                        
                        /* if($status=="0")
                        { ?>
                     <label class="btn btn-danger">Not agree</label>
                        <?php
                        }*/
                        //if($status=="1")
                        //{
                                        ?>
                     <label class="btn btn-success"><li class="fa fa-check">Done</li></label></td>
                        <?php 
                       // } 
                        ?>
                        </td>  -->     
                           
                        <td>       
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <a  href="display1.php?view=<?php echo $row['complain_id'];?>"><i class="fa fa-eye" aria-hidden="true" style="color:purple"></i> </a> 
                        <!--<a href="update/F_edit.php?GetId=<?php echo  $id ?>"><i class="fa fa-edit" style=color:green></i></a>-->
                        </td>
                           <?php } ?>
                        
                        </td>

                          
                           
                            
                               
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