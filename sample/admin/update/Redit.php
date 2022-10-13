<?php 

require("../connection/connect.php");
    $complain_id = $_GET['GetId'];
    $query = " select * from invoice where complain_id='".$complain_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $complain_id = $row['complain_id'];
        $pdf = $row['pdf'];
        $reason = $row['reason'];
        $recomend_by = $row['recomend_by'];
        
       
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

                            <form action="recomendUpdate.php?ID=<?php echo $complain_id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" id" name="complain_id" value="<?php echo $complain_id ?>">
                                <input type="textl" class="form-control mb-2" placeholder=" pdf" name="pdf" value="<?php echo $pdf ?>">
                                <input type="text" class="form-control mb-2" placeholder="What is your reason " name="reason" value="<?php echo $reason ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Type your name " name="recomend_by" value="<?php echo $recomend_by?>">
                                
                               
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>