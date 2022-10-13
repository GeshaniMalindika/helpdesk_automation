<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $supplier_id= $_GET['ID'];
        $name = $_POST['name'];
        $company_name = $_POST['company_name'];
        $address = $_POST['address'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $fax = $_POST['fax'];

        $query = " update supplier set  supplier_id='".$supplier_id."', name = '".$name."', company_name='".$company_name."',address='".$address."',contact_no='".$contact_no."',email='".$email."',fax='".$fax."' where supplier_id='".$supplier_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../supplierTable.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../supplierTable.php");
    }
?>