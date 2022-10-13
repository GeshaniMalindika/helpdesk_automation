<?php
    session_start();
    require("./connection/connect.php");
    

$result = mysqli_query($con,"SELECT * FROM complain");

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="css/complain.css">
    <link rel="stylesheet" href="CSS/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    * {
    margin: 0;
    padding: 0
}

body{
    background:#DDDDDA;
}
.btn-area{
    height: 40px;
    margin: 2px 0;
    width:150px;
    margin-top:1px;
    margin-left: 75%;
}


.card p-4 {
    width: 200px;
    background-color: #efefef;
    border: none;
    align-items: center;
    cursor: pointer;
    transition: all 0.5s;
    justify-content: center;
    height:200px;
    margin-left: 5%;
    margin-top: 15%;
}
h3{
    color:Blue ;
    margin-top: 10px;
    align:center;
}
h1{
    color:Blue ;
    margin-top: 10px;
   margin-left:35%;
   font-size:8px;
}
.line{
    display: flex;
    margin-top: 5px;
    align-items: left;
    justify-content: left;
}

.button-group1{
    height: 40px;
    margin: 2px 0;
    width:200px;
    margin-top:1%;
    margin-left: 45%;
}
.button-group1 input{
    height: 100%;
    width: 20%;
    margin-top:-15%;
    margin-left: 35%;
    outline: none;
    color: #111;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    background-color: transparent;
    transition: all 0.3s ease;
}
.button-group1 input:hover{
    color: blue;
    background-color: #fff;
    font-family: 'nunito';
    font-weight: bold;
}
.container{
    max-width: 1300px;
    width: 300%;
    margin-left: 20%;
    margin-top: 35px;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.a{
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  left:40%;
}

.a:hover {
  background-color: #769FCA;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
button.print-button {
  width: 100px;
  height: 100px;
}
span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  border: solid 4px #333;
}
span.print-icon::after {
  border-width: 2px;
}

button.print-button {
  position: relative;
  padding: 0;
  border: 0;
  
  border: none;
  background: transparent;
}

span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  box-sizing: border-box;
  background-color: #fff;
}

span.print-icon {
  position: relative;
  display: inline-block;  
  padding: 0;
  margin-top: 20%;

  width: 60%;
  height: 35%;
  background: #fff;
  border-radius: 20% 20% 0 0;
}

span.print-icon::before {
  content: " ";
  position: absolute;
  bottom: 100%;
  left: 12%;
  right: 12%;
  height: 110%;

  transition: height .2s .15s;
}

span.print-icon::after {
  content: " ";
  position: absolute;
  top: 55%;
  left: 12%;
  right: 12%;
  height: 0%;
  background: #fff;
  background-repeat: no-repeat;
  background-size: 70% 90%;
  background-position: center;
  background-image: linear-gradient(
    to top,
    #fff 0, #fff 14%,
    #333 14%, #333 28%,
    #fff 28%, #fff 42%,
    #333 42%, #333 56%,
    #fff 56%, #fff 70%,
    #333 70%, #333 84%,
    #fff 84%, #fff 100%
  );

  transition: height .2s, border-width 0s .2s, width 0s .2s;
}

button.print-button:hover {
  cursor: pointer;
}

button.print-button:hover .print-icon::before {
  height:0px;
  transition: height .2s;
}
button.print-button:hover .print-icon::after {
  height:120%;
  transition: height .2s .15s, border-width 0s .16s;
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
  background-color: #498D87;
  color: black;
  margin-left:20%;
  font-size:19px;
  width:110px;
  height:40px;
}
.previous1 {
  background-color: #498D87;
  color: black;
  height:40px;
  font-size:19px;
  width:95px;
  margin-left:20%;
  margin-right:20%;
}
button{
  color:black;
 background:#ffcad4;
 border:6px;
 width:75px;
 height:40px;
 border-radius:5px;
 font-weight:bold;
 
}
</style>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
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
   
    
    <header>
    <a href="complain.php" class="previous"><b>Previous</b> </a>
    <a href="logout.php" class="previous1"><b>Logout</b></a>
     
    
 


</header>
<section>
<h1 class="h1">Your Complaint History</h1>

<div class="container">
            
           
               
        
        <center>
        <div class="table-responsive">   
        <table class="table">  
                    
                <thead>
                    <tr>
                    
                        <th scope="col">Complaint ID</th>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Date&Time</th>
                        <th scope="col">Asset ID</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">CheckOut Status</th>
                       
                        <th scope="col">Status</th>
                        

                    </tr>
                    <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
                </thead>
            <?php
            
            $sql = "SELECT * from complain where username = '".$_SESSION['username']."'";
             $result=mysqli_query($con,$sql);
             if($result)
                 while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                            
                            <td><?php echo $complain_id=$row['complain_id'];?></td>
                            <td><?php echo$emp_id=$row['emp_id'];?></td>
                            <td><?php echo$title=$row['title'];?></td>
                            <td><?php echo$emp_name=$row['emp_name'];?></td>
                            <td><?php echo$contact_no=$row['contact_no'];?></td>
                            <td><?php echo$username=$row['username'];?></td>
                            <td><?php echo$unit=$row['unit'];?></td>
                            <td><?php echo$date=$row['date'];?></td>
                            <td><?php echo$asset_id=$row['asset_id'];?></td>
                            <td><?php echo$description=$row['description'];?></td>
                            <td><button><?php echo$checkout=$row['checkout'];?></button></td>
                            <!--<td>
                            <a href="delete/delete-process.php?complain_id=<?php echo $row["complain_id"]; ?>"><i class="fa fa-trash" style=color:purple></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                            <a href="update/rEdit.php?GetId=<?php echo  $complain_id ?>"><i class="fa fa-edit" style=color:green></i></a>&nbsp;&nbsp;&nbsp;
                            
                           
                       </a>

                 </td>-->
                 <td>
                 <?php 
             $status=$row['status'];
             
              if($status=="0")
             { ?>
          <label class="btn btn-danger">Process</label>
             <?php
             }
             if($status=="1")
             {
                             ?>
          <label class="btn btn-success">Finish</label></td>
             <?php 
             } 
             ?>
             </td>
                    
                 
                            <?php } 
                            ?>                           
 </tr>
 <?php
			$i++;
			}
			?>
   </tbody>
   
     </table>
     <?php
}
else
{
    echo "No result found";
}
?>
     </center>
     </div>
     <center> <button onclick="window.print();return false"
    class="print-button"> <span class="print-icon"></span></button></center>
    </section>
    
     
     <a href="profile.php" class="a1">&#8250;</a>
                
</body>

</html>