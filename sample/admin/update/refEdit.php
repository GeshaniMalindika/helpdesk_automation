<?php 

require("../connection/connect.php");
    $complain_id = $_GET['GetId'];
    $query = " select * from complain where complain_id='".$complain_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $complain_id = $row['complain_id'];
        $emp_id= $row['emp_id'];
        $emp_name = $row['emp_name'];
        $contact_no = $row['contact_no'];
        $username = $row['username'];
        $unit = $row['unit'];
        $asset_id = $row['asset_id'];
        $description = $row['description'];
        $refference_no = $row['refference_no'];
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
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="comUpdate.php?ID=<?php echo $complain_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" devision" name="complain_id" readonly value="<?php echo $complain_id ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" office" name="emp_id" readonly value="<?php echo $emp_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" asset_id " name="emp_name" readonly value="<?php echo $emp_name ?>">
                                <input type="text" class="form-control mb-2" placeholder="  brand " name="username"readonly value="<?php echo $username?>">
                                <input type="text" class="form-control mb-2" placeholder="model" name="asset_id" readonly value="<?php echo $asset_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" serial_no " name="description" readonly value="<?php echo $description ?>">
                                <input type="text" class="form-control mb-2" placeholder=" refference No " name="refference_no" value="<?php echo $refference_no ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>