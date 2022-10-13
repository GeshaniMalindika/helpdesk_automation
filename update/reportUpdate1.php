<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $complain_id= $_GET['ID'];
        $emp_id= $_GET['emp_id'];
        $title= $_GET['title'];
        $emp_name = $_POST['emp_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $unit= $_GET['unit'];
        $asset_id= $_GET['asset_id'];
        $description = $_POST['description'];
        
        

        $query = " update complain set  complain_id='".$complain_id."', emp_id='".$emp_id."',title='".$title."',emp_name = '".$emp_name."', contact_no='".$contact_no."',username='".$username."',unit='".$unit."',asset_id='".$asset_id."',description='".$description."' where complain_id='".$complain_id."'";
        $result = mysqli_query($con,$query);
        
        if($result)
        {
            header("location:../report02.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../report02.php");
    }
?>