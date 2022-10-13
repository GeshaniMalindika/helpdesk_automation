<?php
require("../connection/connect.php");

if(count($_POST)>0) {
mysqli_query($con,"UPDATE complain set emp_id='" . $_POST['emp_id'] . "', title='" . $_POST['title'] . "', emp_name='" . $_POST['emp_name'] . "', contact_no='" . $_POST['contact_no'] . "' ,email='" . $_POST['email'] . "' , asset_id='".$_POST['asset_id']."', description='".$_POST['description']."' WHERE complain_id='" . $_POST['complain_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM complain WHERE complain_id='" . $_GET['complain_id'] . "'");
$row= mysqli_fetch_array($result);
if($result){
    header("location: ../report.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaint</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/complain.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

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
</style>
</head>

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
<h1 class="h1">Helpdesk</h1>
    <section class="appoinment">
        <div class="container" style="margin-left: '38%';">
            <div class="title">Update complaint</div>
            <form method="post">
            <div><?php if(isset($message)) { echo $message; } ?>
                <div class="user-details">
                <div class="input-box">
                        <span class="details">Complaint Id</span>
                        <input type="text" name="employee_id" value="<?php echo $row['complain_id']; ?>">
                    </div>
                <div class="input-box">
                        <span class="details">Employee Id</span>
                        <input type="text" placeholder="Enter employee ID" name="emp_id" value="<?php echo $row['emp_id']; ?>">
                    </div>
                    <div>
                    <label for="title">Title</label>
                     <select name="title" id="title">      
                            <option value="Mr.">Mr. </option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss.">Miss.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Rev.">Rev.</option>
                            
                     </select> 
                  </div> 

                    <div class="input-box">
                        <span class="details">Employee Name</span>
                        <input type="text" placeholder="Enter your name" name="emp_name" value="<?php echo $row['emp_name']; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter your number" name="contact_no" value="<?php echo $row['contact_no']; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" value="<?php echo $row['email']; ?>"> 
                    </div>

                    
                    <div>
                    <label for="unit">Choose an unit</label>
                        <select name="unit" id="unit">      
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
                        <input type="text" placeholder="Enter Asset ID" name="asset_id" value="<?php echo $row['asset_id']; ?>">
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
                
                <input type="submit" name="submit" value="Submit" class="button-group">
            </div>
            </form>
        </div>
        </div>
    </section>
</body>
<script src="assets/fontawesome/js/all.min.js"></script>

</html>