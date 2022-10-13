
<?php 

require("../connection/connect.php");
    $emp_id = $_GET['GetId'];
    $query = " select * from asset_user where emp_id='".$emp_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $emp_id = $row['emp_id'];
        $title = $row['title'];
        $emp_name = $row['emp_name'];
        $contact_no = $row['contact_no'];
        $username = $row['username'];
        $address = $row['address'];
        $user_type = $row['user_type'];
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

                            <form action="roleUpdate.php?ID=<?php echo $emp_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" emp_id" name="emp_id" readonly  value="<?php  $emp_id ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" title" name="title" readonly value="<?php echo $title ?>">
                                <input type="text" class="form-control mb-2" placeholder="emp_name No" name="emp_name" readonly value="<?php echo $emp_name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" contact_no Email " name="contact_no" readonly value="<?php echo $contact_no ?>">
                                <input type="email" class="form-control mb-2" placeholder=" devemailision " name="username" readonly value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder=" address " name="address"readonly value="<?php echo $address ?>">
                                
                                <input type="radio" name="user_type" value="it_officer" class="custom-radio" required >&nbsp; It_officer
                                    <input type="radio" name="user_type" value="subject" class="custom-radio" required>&nbsp; Subject
                                    <input type="radio" name="user_type" value="data_enter" class="custom-radio" required>&nbsp; data_enter
                                    <input type="radio" name="user_type" value="procurement" class="custom-radio" required>&nbsp; Procurement
                                    <input type="radio" name="user_type" value="finance" class="custom-radio" required>&nbsp; Finance
                                    <input type="radio" name="user_type" value="gm" class="custom-radio" required>&nbsp; GM  <br>
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