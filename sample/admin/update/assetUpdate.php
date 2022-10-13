<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $asset_id= $_GET['ID'];
        $devision = $_POST['devision'];
        $office = $_POST['office'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $serial_no = $_POST['serial_no'];
       

        $query = " update asset set  asset_id='".$asset_id."', devision = '".$devision."', office='".$office."',brand='".$brand."',model='".$model."',serial_no='".$serial_no."' where asset_id='".$asset_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../asset_table.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../asset_table.php");
    }
?>