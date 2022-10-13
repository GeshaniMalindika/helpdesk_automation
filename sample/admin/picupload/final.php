<?php include 'config/db.php';?>
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'helpdesk1');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $pdf1 = $_FILES['pdf1']['name'];
    $complain_id=$_POST['complain_id'];
    //$pdf1=$_POST['pdf1'];
    // destination of the file on the server
    $destination = './upload/' . $pdf1;

    // get the file extension
    $extension = pathinfo($pdf1, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $pdf1 = $_FILES['pdf1']['tmp_name'];
   

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['pdf1']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($pdf1, $destination)) {
            $sql = "INSERT INTO invoice(complain_id,pdf1) VALUES ('$complain_id','$pdf1')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            "error: " .$sql. "" .mysqli_error($db);
           // echo "Failed to upload file.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
    <style>
        form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}</style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" >
        <h3>Complaint Id</h3>
          <input type="text" name="complain_id">
          <h3>Upload File</h3>
          <input type="file" name="pdf1" required> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>