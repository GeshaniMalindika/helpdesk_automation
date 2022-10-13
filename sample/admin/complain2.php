<?php
    session_start();
    require("./connection/connect.php");
    $sql = "SELECT * from asset_user where username = '".$_SESSION['username']."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $emp_id=$row['emp_id'];
        $title=$row['title'];
        $emp_name=$row['emp_name'];
        $contact_no=$row['contact_no'];
        $username=$row['username'];
       
       
    if(isset($_POST['submit'])){
        $emp_id=$_POST['emp_id'];
        $title=$_POST['title'];
        $emp_name=$_POST['emp_name'];
        $contact_no=$_POST['contact_no'];
        $username=$_POST['username'];
        $unit=$_POST['unit'];
        $description=$_POST['description'];
        $asset_id=$_POST['asset_id'];
       // $date=$_POST['date'];
        
        
        $sql="insert into `complain` (emp_id,title,emp_name,contact_no,username,unit,description,asset_id) values('$emp_id','$title','$emp_name','$contact_no','$username','$unit','$description','$asset_id')";
        $result=mysqli_query($con,$sql);
        
        if($result){
            header('location:report03.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
 ?>   
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addUser.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/main.css">-->
    <link rel="stylesheet" href="css/complain.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">-->
</head>

    

    <style>
        body{
    background:#DDDDDA;
}
        .container{
    max-width: 600px;
    width: 400%;
    margin-left: 35%;
    margin-top: 15px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    height:750px;
}
.h1 {
    color:darkblue;
    text-align:center;
}

.role{
    color:white;
}
.img{
    border-radius:25px;
    border: 2px solid purple;
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
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI4XdFAwa_WQsPE75UNSYJdRU9YZ0FVsuw5Q&usqp=CAU" width="50" height="50"class="img" >&nbsp;
        <h5><font color="black">
        <?php
                    $sql = "SELECT emp_name from asset_user where username = '".$_SESSION['username']."'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $emp_name=$row['emp_name'];
                           
                             echo 'Hello put your complaint' ; 
                        }
                    }
                ?>
                
                &emsp;&emsp;&emsp;&emsp;</h5>
                </font>
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
                <a href="dashboard.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                                <a href="complain2.php" class="dropdown-item nav-link active "><i class='fas fa-file-invoice fa-lg'></i>put complaint</a>
                                <a href="complainTable.php" class="dropdown-item nav-link"><i class='fas fa-file-invoice fa-lg'></i>All complaint </a>
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
            
    <section class="appoinment">
        <div class="container" style="margin-left: '38%';">
        <div class="btn-group">
    <a href="report03.php" class="btn btn-primary active">
        <i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>view complaints
    </a>
    
</div><br>
            <div class="title">Make a complaint</div>
            <form method="post">
                <div class="user-details">
                    
                <div class="input-box">
                        <span class="details">Employee Id</span>
                        <input type="text" placeholder="Enter employee ID" name="emp_id" required readonly
                             value=<?php echo $emp_id;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Title</span>
                        <input type="text" placeholder="Enter your name" name="title" required readonly
                             value=<?php echo $title;?>>
                    </div>

                    <div class="input-box">
                        <span class="details">Employee Name</span>
                        <input type="text" placeholder="Enter your name" name="emp_name" required readonly 
                             value=<?php echo $emp_name;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter your number" name="contact_no" required readonly
                            value=<?php echo $contact_no;?>>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="username" required readonly
                             value=<?php echo $username;?>> 
                    </div>

                    
                    <div>
                    <label for="unit">Choose an unit</label>
                        <select name="unit" id="unit">      
                            <option value="Admin">Admin </option>
                            <option value="Operation">Operation Unit</option>
                            <option value="Finance">Finance Unit</option>
                            <option value="IT">IT Unit </option>
                            <option value="TR">Training & Research Unit </option>
                            <option value="Chairman">Chairman Staff</option>
                            <option value="Three wheel">Three wheel unit / Public Complaints unit</option>
                            <option value="Project">Project unit</option>
                            <option value="Audit">Audit unit</option>
                            <option value="CTS">Central Training school unit </option>
                            
                        </select> 
                 </div> 
                 <div class="input-box">
                        <span class="details">Asset ID</span>
                        <input type="text" placeholder="Enter Asset ID" name="asset_id" required >
                </div>
                 <div class="input-box">
                        <span class="details">Description</span>
                        <textarea rows = "3" cols = "30" name = "description">
                        </textarea>
                </div>
                    
                     <div class="input-box">
                    <span class="details">Date and Time</span>
                   
                    <?php
                       // Set the new timezone
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date('d-m-y h:i:s');
                         echo $date;
                          ?>
                    </div>
                    
                </div>

               
                
                
                <div class="button-group" >
                <input type="submit" value="submit" name="submit">
                <input type="reset" value="cancel" name="cancel">
            </form>
        </div>
        </div>
    </section>

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