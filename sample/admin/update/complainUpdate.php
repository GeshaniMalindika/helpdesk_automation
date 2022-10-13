<?php
    require("../../connection/connect.php");
    $complain_id=$_GET['updatecomplain_id'];
    $sql="select * from `complain` where complain_id=$complain_id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $emp_id=$row['emp_id'];
    $emp_name=$row['emp_name'];
    $contact_no=$row['contact_no'];
    $email=$row['email'];
    $date=$row['date'];
    $complaint=$row['complaint'];
    $unit=$row['unit'];
    
    if(isset($_POST['submit'])){
        $complain_id=$row['complain_id'];
        $title=$row['title'];
        $emp_id=$row['emp_id'];
        $emp_name=$row['emp_name'];
        $contact_no=$row['contact_no'];
        $email=$row['email'];
        $date=$row['date'];
        $complaint=$row['complaint'];
        $unit=$row['unit'];


        $sql="update `complain` set 'emp_id='$'emp_id',emp_name='$emp_name',contact_no='$contact_no',email='$email',date='$date',complaint='$complaint',unit='$unit' where complain_id=$complain_id";
        $result=mysqli_query($con,$sql);
        if($result){
            header("location: ../complainTable.php");
        }
        else{
            die(mysqli_error($con));
        }
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>

<body>
    <header>
        <img class="logo" src="../../assets/images/icons/logo.png" alt="">
        <nav>
            <ul class="nav-area">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <div class="input-box">
                    <span class="details">Employee Name</span>
                    <input type="text" placeholder="Enter your first name" name="emp_name" required> 
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" placeholder="Enter your number" name="contact_no" required> 
                </div>
            
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email" required> 
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your last name" name="address" required> 
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="password" required> 
                </div>
                
            </div>
            
            
            <div class="button-group" >
                <input type="submit" value="submit" name="submit">
                <input type="reset" value="cancel" name="cancel" >
            </div>
</div>
            
        </div>
    </section>
</body>
<script src="assets/fontawesome/js/all.min.js"></script>

</html>