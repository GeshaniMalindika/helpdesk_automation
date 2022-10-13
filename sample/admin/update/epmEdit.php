
<?php 

require("../connection/connect.php");
    $emp_id = $_GET['GetId'];
    $query = " select * from asset_user where emp_id='".$emp_id."' ";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $emp_id = $row['emp_id'];
        $username = $row['username'];
        $password = $row['password'];
       
        
       
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

                            <form action="epmUpdate.php?ID=<?php echo $emp_id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" id" name="emp_id" value="<?php echo $emp_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" pdf" name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder="What is your reason " name="password" value="<?php echo $password ?>">
                                
                                
                               
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>