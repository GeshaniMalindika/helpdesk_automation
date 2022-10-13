<?php
session_start();
 require("./connection/connect.php");
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="CSS/login.css">
</head>
<style>
    .container{
    max-width: 1200px;
    width: 400%;
    margin-left: 20%;
    margin-top: 55px;
    background:#fff;
    padding: 25px 30px;
    height:50%;
    outline-style: groove;
}
  .b{
    margin-left:590px;
   color:white;

  }
  #footer {
   position: fixed;
   bottom:0;
   width: 100%;
   height: 60px;   /* Height of the footer */
   background: #6cf;
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
  background-color: #04AA6D;
  color: black;
  
}

.next {
  background-color: #04AA6D;
  color: white;
  margin-left:10%;

}


</style>
<body >
    <!-- Header -->
    <nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="./asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="./asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container1">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <a class="navbar-brand"><b class="b">PC USER LIST</b></a>
        </div>
        
       </div>
       <a href="index.php" class="previous">&laquo;Previous </a>
    <a href="index02.php" class="next">Next &raquo;</a>
    </nav>
   

    
<!--<button type="button" class="icon-button">
                            <span class="material-icons">notifications</span>
                            <span class="icon-button__badge"><?php
                               $sql = "SELECT * from asset user where 'role' IS NULL";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo  $rowcount1;
                                }
                            ?></span>
                        </button>
    <div class="container-fluid position-relative d-flex p-0">-->
        <!-- Spinner Start -->
        <!--<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>-->
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
       <!-- <div class="sidebar pe-4 pb-3">
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
                        
                    <span class="role">IT Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="recomend.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="user.php" class="nav-item nav-link active"><i class="fa fa-laptop me-2"></i> Users</a>
                <a href="officer1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Officer List</a>
                <a href="recomendation.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Recomend</a>
                <a href="final_report1.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Invoice</a>
                <a href="edit_profile.php" class="nav-item nav-link " ><i class="fa fa-laptop me-2"></i>Edit Profile</a>
                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a> 
                    </div>
                    
                        
                    </div>
                </div>
            </nav>
        </div>
            </nav>
        </div>-->
        <!-- Sidebar End -->


        <!-- Content Start -->
        
    <section>
        <div class="container">
            
            <div class="table-responsive">          
  <table class="table">
                <thead>
                    <tr>
                        <th scope="col">EMP ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                
                <tbody>

                    <?php
                    $sql="select * from `asset_user` where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result)
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <tbody>
                            <td><?php echo $emp_id=$row['emp_id'];?></td>
                            <td><?php echo$title=$row['title'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$contact_no=$row['contact_no'];?></td>
                            <td><?php echo$username=$row['username'];?></td>
                            <td><?php echo$address=$row['address'];?></td>
                            
                            
                               
                                
                                
                                <!--<td>&nbsp;&nbsp;
            
                                <a href="delete/userDelete.php?remove=<?=$row['emp_id'] ?>" onclick="return confirm('are you sure want to remove this item?');">
                          
                            <i class="fa fa-trash" style=color:red></i>
                        </a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="update/roleEdit.php?GetId=<?php echo  $emp_id ?>"><i class="fa fa-edit" style=color:green></i></a></td>
                                </td>-->
                                <td><?php echo$user_type=$row['user_type'];?></td>
                               <!-- <td>
                                    
                                <?php 
             //$status=$row['status'];
             
              //if($status=="0")
             //{ ?>
          <label class="btn btn-danger">Process</label>
             <?php
             //}
             //if($status=="1")
            // {
                             ?>
          <label class="btn btn-success">Finish</label></td>
             <?php 
            // } 
             ?>
             </td>-->
                    
                 
                            <?php } 
                            ?> 
                            
                            
                            </tr>
                     
                

                </tbody>
            </table>
        </div>
    </section>


        <!-- Back to Top -->
       
    <!-- JavaScript Libraries -->
    <footer class="page-footer font-small teal pt-4 bg-secondary" id="footer">

       

        <!-- Copyright -->
        <div class="footer-copyright text-light py-3 bg-dark">&nbsp© 2022 Copyright :
            <a href="/"> Road Passenger Transport Authority</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>