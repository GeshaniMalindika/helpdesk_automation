<?php 

require("config/db.php");
    $complain_id = $_GET['GetId'];
    $sql = " select * from invoice where complain_id='".$complain_id."' ";
    $result = mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
        $complain_id = $row['complain_id'];
        $pdf= $row['pdf'];
        $pdf1 = $row['pdf1'];
        
        
        
        
       
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
        
        <form action="inUpdate.php?ID=<?php echo $complain_id ?>" method="post">
        <label for=""> Complain Id</label>
        
        <input type="text" class="form-control mb-2" placeholder=" id" name="complain_id" readonly value="<?php echo $complain_id ?>"><br>
        <label for="">Upload Your Invoice<br> (Only PDF)</label><br>
        <input id="pdf" type="file" name="pdf1" value="" required><br>



      
     

        
        
        <input id="upload" type="submit" name="submit" value="Upload">
        </form>
      </div>
    </div>
  </body>
</html>