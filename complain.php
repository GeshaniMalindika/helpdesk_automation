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
        $asset_id=$_POST['asset_id'];
        $description=$_POST['description'];
        
       //$date=$_POST['date'];
        
        
        $sql="insert into `complain` (emp_id,title,emp_name,contact_no,username,unit,asset_id,description) values('$emp_id','$title','$emp_name','$contact_no','$username','$unit','$asset_id','$description')";
        $result=mysqli_query($con,$sql);
        
        if($result){
            header('location:report.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
 ?>   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaint</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/complain.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">

    <style>
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
  background-color: #487E82;
  color: black;
  
}

body{
    background:#DDDDDA;
}
</style>
</head>

<body>
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
    <!-- Navbar
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"><b>HELPDESK</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ml-4" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ml-4" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
       
       </div>
    </nav> -->
    <header>
       
    
</header>

    <section class="appoinment">
        <div class="container" style="margin-left: '38%';">
        <a href="report.php" class="btn btn-primary active">
        <i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>view complaints
    </a>
            <div class="title">Make a complaint</div>
            <form method="post">
                <div class="user-details">
                    
                <div class="input-box">
                        <span class="details">Employee Id</span>
                        <input type="text" placeholder="Enter employee ID" name="emp_id" required readonly
                             value=<?php echo $emp_id;?>>
                    </div>
                    <!--<div>
                    <label for="title">Title</label>
                     <select name="title" id="title">      
                            <option value="Mr.">Mr. </option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss.">Miss.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Rev.">Rev.</option>
                            
                     </select> 
                  </div> -->
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
                        <option value="It">IT unit </option>     
                            <option value="Admin">Admin </option>
                            <option value="Operation">Operation Unit</option>
                            <option value="Finance">Finance Unit</option>
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
                <input type="submit" class="btn btn-primary" value="submit" name="submit">
                
                <input type="reset" class="btn btn-danger"  value="cancel" name="cancel">
            </form>
        </div>
        </div>
    </section>
</body>
<script src="assets/fontawesome/js/all.min.js"></script>

</html>