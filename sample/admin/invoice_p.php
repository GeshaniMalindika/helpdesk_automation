<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Procurement</title>
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
    max-width: 1300px;
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
    height:38px;

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


.green{
    background-color: #BBEDBE;
    color:black;
    width:100px;
    font-weight:bold;
}
.red{
    background-color:  #F1B9AC;
    color:black;
    width:107px;
    font-weight:bold;
}
.purple{
    background-color:  light purple;
    color:black;
    width:100px;
    
}
.role{
    color:white;
}
hr {
  border: 10px solid #DA0757;
  border-radius: 5px;
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
                        
                        <span class="role">Procurement Committee</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="procurement.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="complain3.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Put complaint</a>
                    <a href="invoice_p.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Invoice approve</a> 
                    <a href="invoice_2.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Invoice Summery</a> 
                    <a href="pList.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>List</a>
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
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search wise unit... " style="background-color:white">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        
                                    </div>
                                    <div class="col-md-12">
                
                        <table class="table table-bordered">
                            <thead>
                                <tr bgcolor="#498D87">
                                
                                <th scope="col">Complaint ID</th>
                                <th scope="col">Emp ID</th>
                                <th scope="col">Emp Name</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Date&Time</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Refference No</th>
                                <th scope="col">Recomendation</th>
                                <th scope="col">PC recomend</th>
                                <!--<th scope="col">Toogle</th>
                                <th scope="col">Operation</th>-->
                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   
                                    $con=mysqli_connect('localhost','root','','helpdesk1');
                                    if(isset($_GET['search']))
                                    {
                                   
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM complain inner join invoice ON complain.complain_id=invoice.complain_id WHERE CONCAT(unit) LIKE '%$filtervalues%' ";
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
                                                    <td><?= $items['unit']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    <td><?= $items['pdf']; ?></td>
                                                    <td><?= $items['refference_no']; ?></td>
                                                   
                                                   

                                                    <td>
                 <?php 
             $recomend=$items['recomend'];
             
              if($recomend=="0")
             { ?>
          <label class="btn btn-danger"><li class="fa fa-times" >Not </li></label>
             <?php
             }
             if($recomend=="1")
             {
                             ?>
          <label class="btn btn-success"><li class="fa fa-check" >Recomend to GM</li></label></td>
             <?php 
             } 
             ?>
           
            </td>
            <td>

<?php 
// Usage of if-else statement to translate the 
// tinyint status value into some common terms
// 0-Inactive
// 1-Active
if($items['rec1']=="1") 
echo '<span style="color:green; text-align:center;">Recomend</span>';
else 
echo'<span style="color:red; text-align:center;">Not Recomend</span>';
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
                        </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <table class="table table-bordered">  
 <hr>
                <thead>
                    <tr bgcolor="#CAF1DE">
                    <th scope="col">Complaint ID</th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">Emp name</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Invoice</th>
                    <th scope="col">Refference No</th>
                        <th scope="col">Recomended By</th>
                        <th scope="col">Status</th>
                        
                        <th scope="col">Toogle</th>
                        
                        <th scope="col">Operation</th>
                       
                    </tr>
                </thead>
                

                    <?php
                   
                    $sql = "SELECT * from complain inner join invoice ON complain.complain_id=invoice.complain_id where recomend=1";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                        
                    
                ?>
                <tbody>
                <td align="center"><?php echo$complain_id= $row['complain_id'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                           <td><?php echo$date=$row['unit'];?></td>
                            <td><?php echo$pdf=$row['pdf'];?></td>
                            <td><?php echo$refference_no= $row['refference_no'];?></td>
                            <td><?php echo$recomend_by=$row['recomend_by'];?></td>
                            
                           
                            <td>

                            <?php 
                        // Usage of if-else statement to translate the 
                        // tinyint status value into some common terms
                        // 0-Inactive
                        // 1-Active
                        if($row['rec1']=="1") 
                            echo '<span style="color:green; text-align:center;">Recomend</span>';
                        else 
                            echo'<span style="color:red; text-align:center;">Not Recomend</span>';
                    ?>                          
                </td>
                <td>
                    <?php 
                    if($row['rec1']=="0") 
  
                        // if a course is active i.e. status is 1 
                        // the toggle button must be able to deactivate 
                        // we echo the hyperlink to the page "deactivate.php"
                        // in order to make it look like a button
                        // we use the appropriate css
                        // red-deactivate
                        // green- activate
                        echo 
                    //"<a href=activate/approve.php?id=".$row['id']." class='button purple'>Click Here</a>";
                       // else 
                        //echo 
                    "<a href=dactivate/not-approve.php?complain_id=".$row['complain_id']." class='button purple'>Recommend to GM</a>";
                    else 
echo
 "<i class='fa fa-check' aria-hidden='true'style=color:grey>done</i>";
                    ?>
                        </td>   
                       
                            <td> 
                            <!--<a href="delete/invoiceDelete.php?remove=<?=$row['complain_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                           
                           <i class="fa fa-trash" style=color:red></i>
                       </a> &nbsp;&nbsp; &nbsp;-->&nbsp; &nbsp;&nbsp;
                                <a href="display_php2.php?view=<?php echo $row['complain_id'];?>"><i class="fa fa-eye" aria-hidden="true" style="color:purple"></i></a>
                                  </td>
                                  
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