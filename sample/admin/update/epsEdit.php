
<?php 

require("../connection/connect.php");
    $id = $_GET['GetId'];
    $query = " select * from user where id='".$id."' ";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $password=sha1($password);
        $email = $row['email'];
        $contact_no = $row['contact_no'];
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

                            <form action="epsUpdate.php?ID=<?php echo $id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" id" name="id" value="<?php echo $id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" pdf" name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder="What is your reason " name="password" value="<?php echo $password ?>">
                                <input type="text" class="form-control mb-2" placeholder="What is your reason " name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder="What is your reason " name="contact_no" value="<?php echo $contact_no ?>">
                               
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>