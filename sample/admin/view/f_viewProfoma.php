<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/complain.css" rel="stylesheet">
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
        margin-left: 15%;
      }
      .div1{
        margin-left: 270px;
      }
      body{
    background:#DDDDDA;
}
.btn{
    display:inline-block;
    
    padding:8px;
    text-align:center;
    font-family:verdana;
    font-style:italic;
    margin-left:50%;
    margin-top:2%;
    font-size:23px;
    text-decoration:none;
    border-radius:4px;
    width:95px;
    height:58px;

}
    </style>

  </head>
  <body>
  <nav class="navbar navbar-white bg-light">
        <a class="navbar-brand mx-auto d-inline-flex" href="#" style="">
            <img src="../../asset/image/Sri.png" width="80" height="100" class="d-inline-block align-top" alt="">
            <div class="text-center mt-1 ml-3 mr-3">
                <b>මාර්ගස්ථ මගී ප්‍රවාහන අධිකාරිය</b><br>
                <b>சாலை பயணிகள் போக்குவரத்து ஆணையம்</b><br>
                <b>Road Passenger Transport Authority</b>
            </div>
            <img src="../../asset/image/logo.png" width="110" height="100" class="d-inline-block align-top" alt="">

        </a>
    </nav>
    <div class="div1">
      <?php
      require("../connection/connect.php");
      

      $sql="SELECT pdf from invoice where complain_id='$_GET[view]'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="./../picupload/uploads/<?php echo $info['pdf'] ; ?>" width="1000" height="700":>
    <?php
      }
    
      ?>

    </div>
    <a href="../invoice_4.php" button type="button" class="btn btn-primary btn-sm">close</button></a>
  </body>
</html>