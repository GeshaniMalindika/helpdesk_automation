<?php
require("../connection/connect.php");

$sql = "DELETE FROM complain WHERE complain_id='" . $_GET["complain_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("location: ../report02.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($con);
?>