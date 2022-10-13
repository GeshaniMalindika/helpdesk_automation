<?php 

require("../connection/connect.php");
    if(isset($_POST['update']))
    {
        $complain_id= $_GET['ID'];
        $pdf = $_POST['pdf'];
        $reason = $_POST['reason'];
        $recomend_by = $_POST['recomend_by'];
        
        $query = "UPDATE invoice SET reason ='$reason',  recomend_by ='$recomend_by' WHERE complain_id ='$complain_id' and recomend='1'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:../recomendation.php");
        }
        else
        {
            echo "ERROR: " .$query."".mysqli_error($con);
        }
    }
    else
    {
        header("location:../recomendation.php");
    }
?>
