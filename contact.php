<?php
    require("./connection/connect.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $msg=$_POST['msg'];


        $sql="insert into `comment` (name,email,subject,msg) values('$name','$email','$subject','$msg')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:contact.php');
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
    <title>Contact us</title>

    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/fontawesome/js/all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .container{
        max-width: 400px;
    width: 400%;
    margin-left: 30%;
    margin-top: 55px;
    
    padding: 25px 30px;
  
   
    }
.prev-comments {
    margin-top: 20px;
}

.prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.prev-comments .single-item p {
    font-size: .9rem;
    color: #111;
}
</style>

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container1">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;<ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  ml-4" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active ml-4" href="contact.php">Comment</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>
    
    </div>
    <div class="container">
            <div class="title"><b>Write Us</b></div>
            <form action="#" method="post">
           
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your full name" name="userName" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Subject</span>
                        <input type="text" placeholder="Enter your subject" name="subject" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Message</span>
                        <textarea type="text" placeholder="Write the message" name="msg" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container">

            <div class="prev-comments">
                <?php 
			
                        $sql = "SELECT * FROM comment";
                        $result = mysqli_query($con, $sql);
                        if(mysqli_num_rows($result)==0) {
                            while ($row = mysqli_fetch_assoc($result)) {

			        ?>
                <div class="single-item">
                    <h4><?php echo $row['name']; ?></h4>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                    <h5><?php echo $row['subject']; ?></h5>
                    <p><?php echo $row['msg']; ?></p>
                </div>
                <?php

                            }
                        }

                    ?>
            </div>


        </div>
    </section>
     <!-- Footer -->
     <footer class="page-footer font-small teal pt-4 bg-secondary">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mt-md-0 mt-3"> </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold text-center">Footer text</h5>
            <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga
                perferendis modi
                earum
                commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam,
                aspernatur id
                excepturi hic.</p>

        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-3 mt-md-0 mt-3"> </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</div>
<!-- Footer Text -->

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