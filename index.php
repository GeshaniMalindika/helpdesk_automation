<!DOCTYPE html>
<html lang="en">

<head>
    <title>Helpdesk Automation System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<style>
    /* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 19px;
  width:100px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
.animation{
    font-size:38px;
    color:#6ACCBC;
    font-weight:bold;
    margin-top:10px;
    font-family:arial black;
    
}
.image{
  border-radius:105px;
  margin-left:-6%;
}
</style>
<body  >

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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

       <div class="container">
       <!--<a class="navbar-brand"><b>HELPDESK</b></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active ml-4" href="index.php" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ml-4" href="contact.php">Comment</a>
                </li>
            </ul>
        </div>
       
        
  <a button onclick="myFunction()" href="sample/admin/login1.php" class="dropbtn">Login</button></a>
  
    <!--<a href="login.php">PC User</a>-->
    
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
      <!--  <div>
        <a href="login.php"><button type="button" class="btn btn-outline-light btn-lg px-5">Login</button></a>
        </div>-->
       </div>
       
    </nav>
    
    
    <section class="home p-5">
    <marquee width="100%" direction="right" height="100px" class="animation"><b> HELPDESK AUTOMATION SYSTEM..!!</b></marquee>
        <p class="home-p pt-5 pb-3">Our feature-rich help desk software speeds up ticket resolution with the help of proactive automations and
            highly customizable workflows.</p>
            <img src= "https://raidrush.net/attachments/55149/" width="350" height="300" class="image" >
            
        <!-- <img src= "https://png.pngtree.com/png-clipart/20210605/ourmid/pngtree-cartoon-laptop-desktop-workbench-png-image_3421280.jpg" width="350" height="350" ></div>-->
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