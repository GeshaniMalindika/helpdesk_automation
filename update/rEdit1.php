<?php 

require("../connection/connect.php");
    $complain_id = $_GET['GetId'];
    $query = " select * from complain where complain_id='".$complain_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $complain_id = $row['complain_id'];
        $emp_id = $row['emp_id'];
        $title = $row['title'];
        $emp_name = $row['emp_name'];
        $contact_no = $row['contact_no'];
        $email = $row['email'];
        $unit = $row['unit'];
        $asset_id = $row['asset_id'];
        $description = $row['description'];
        
        
       
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
                            <h3 class="bg-success text-white text-center py-3"> Update Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="reportUpdate1.php?ID=<?php echo $complain_id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" emp_id" name="emp_id" value="<?php echo $emp_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Title" name="title" value="<?php echo $title ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Name" name="emp_name" value="<?php echo $emp_name ?>">
                                <input type="text" class="form-control mb-2" placeholder="contact No" name="contact_no" value="<?php echo $contact_no ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder=" unit " name="unit" value="<?php echo $unit ?>">
                                <input type="text" class="form-control mb-2" placeholder=" asset_id " name="asset_id" value="<?php echo $asset_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" description " name="description" value="<?php echo $description ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>