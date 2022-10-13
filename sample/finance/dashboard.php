<?php
    require("../connection/connect.php");
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
    <title>Procurement</title>
    <link rel="stylesheet" href="./CSS/addUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <header>
    
        <nav>
            <ul class="nav-area">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">Payment</a></li>
                <li><a href="#">Invoive</a></li>
                
                
        </nav>
        <form action="" method="post">
            <button class="btn-area" name="logout">Log Out</button>
        </form>
    </header>
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h3 class="card-title text-white">Invoice</h3>
                            <?php
                               $sql = "SELECT * from asset_user";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2">>>> '.$rowcount1.'</h1>';
                                }
                            ?>
                            <a href="#" class="btn btn-dark mb-3">Invoice</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</body>

</html>