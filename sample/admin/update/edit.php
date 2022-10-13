<?php 

require("../connection/connect.php");
    $supplier_id = $_GET['GetId'];
    $query = " select * from supplier where supplier_id='".$supplier_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $supplier_id = $row['supplier_id'];
        $name = $row['name'];
        $company_name = $row['company_name'];
        $address = $row['address'];
        $contact_no = $row['contact_no'];
        $email = $row['email'];
        $fax = $row['fax'];
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

                            <form action="update.php?ID=<?php echo $supplier_id ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" supplier Id" name="supplier_id" value="<?php echo $supplier_id ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" Name" name="name" value="<?php echo $name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Company " name="company_name" value="<?php echo $company_name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="address" value="<?php echo $address?>">
                                <input type="text" class="form-control mb-2" placeholder="contact No" name="contact_no" value="<?php echo $contact_no ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="fax" value="<?php echo $fax ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>