<?php 

require("../connection/connect.php");
$emp_id = $_GET['GetId'];
$query = " select * from asset_user where emp_id='".$emp_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $emp_id = $row['emp_id'];
        $emp_name = $row['emp_name'];
        $contact_no = $row['contact_no'];
        $username = $row['username'];
        $address = $row['address'];
        
        
        
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update </h3>
                        </div>
                        <div class="card-body">

                        <form action="officerUpdate.php?ID=<?php echo $emp_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" Register No" name="emp_id" value="<?php echo $emp_id ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" Name" name="emp_name" value="<?php echo $emp_name ?>">
                                <input type="text" class="form-control mb-2" placeholder="contact No" name="contact_no" value="<?php echo $contact_no ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder=" address " name="address" value="<?php echo $address ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>