<?php 

require("../connection/connect.php");
    $asset_id = $_GET['GetId'];
    $query = " select * from asset where asset_id='".$asset_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $devision = $row['devision'];
        $office = $row['office'];
        $asset_id = $row['asset_id'];
        $brand = $row['brand'];
        $model = $row['model'];
        $serial_no = $row['serial_no'];
       
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

                            <form action="assetUpdate.php?ID=<?php echo $asset_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" devision" name="devision" value="<?php echo $devision ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" office" name="office" value="<?php echo $office ?>">
                                <input type="text" class="form-control mb-2" placeholder=" asset_id " name="companasset_idy_name" value="<?php echo $asset_id ?>">
                                <input type="text" class="form-control mb-2" placeholder="  brand " name="brand" value="<?php echo $brand?>">
                                <input type="text" class="form-control mb-2" placeholder="model" name="model" value="<?php echo $model ?>">
                                <input type="text" class="form-control mb-2" placeholder=" serial_no " name="serial_no" value="<?php echo $serial_no ?>">
                               
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>