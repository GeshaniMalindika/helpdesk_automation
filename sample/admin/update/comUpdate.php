<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $complain_id= $_GET['ID'];
       
        $emp_id= $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $unit = $_POST['unit'];
        $asset_id = $_POST['asset_id'];
        $description = $_POST['description'];
        $refference_no = $_POST['refference_no'];

        $query = "UPDATE complain SET refference_no ='".$refference_no."' WHERE complain_id ='".$complain_id."' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../complainTable.php");
        }
        else
        {
            echo "ERROR: " .$query."".mysqli_error($con);
        }
    }
    else
    {
        header("location:../complainTable.php");
    }
?>
