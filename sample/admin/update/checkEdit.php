
<?php 

require("../connection/connect.php");
    $emp_id = $_GET['GetId'];
    $query = " select checkout from complain where emp_id='".$emp_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
       
        $checkout = $row['checkout'];
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

                            <form action="checkUpdate.php?ID=<?php echo $emp_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" Type noted/not" name="checkout" value="<?php echo $checkout?>" >
                                
                                
                               
                                <!--<h3> Select Role :</h3>
                                
                                <input type="radio" name="user_type" value="IT officer" <?php echo ($user_type == 'it_officer') ? 'checked' : ''; ?> /> IT officer<br />
                                <input type="radio" name="user_type" value="general manager" <?php echo ($user_type == 'gm') ? 'checked' : ''; ?> /> general Manager<br />
                                <input type="radio" name="user_type" value="Procurement Officer" <?php echo ($user_type == 'procurement') ? 'checked' : ''; ?> /> Procurement<br />
                                <input type="radio" name="user_type" value="Finance Officer" <?php echo ($user_type == 'finance') ? 'checked' : ''; ?> /> Finance<br />
                                <input type="radio" name="user_type" value="Subject Officer" <?php echo ($user_type == 'subject') ? 'checked' : ''; ?> /> Subject Officer<br />-->
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>