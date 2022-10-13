
<?php
  
  // Connect to database 
  require("../connection/connect.php");

  // Check if id is set or not if true toggle,
  // else simply go back to the page
  if (isset($_GET['complain_id'])){

      // Store the value from get to a 
      // local variable "course_id"
      $complain_id=$_GET['complain_id'];

      // SQL query that sets the status
      // to 1 to indicate activation.
      $sql="UPDATE `complain` SET 
           `status`=0 WHERE complain_id='$complain_id'";

      // Execute the query
      mysqli_query($con,$sql);
  }

  // Go back to course-page.php
  header('location: ../complainTable.php');
?>