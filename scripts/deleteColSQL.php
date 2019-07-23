<?php 
include "config.php";

    $index = "ID=".$_GET['IDNo']; 

    $sql = "DELETE FROM orderlist WHERE ".$index;

    if (mysqli_query($con, $sql)) {
    echo 'Record deleted successfully click <a href="../data-display.php">here</a> to return';
    } else {
    echo "Error updating record: " . mysqli_error($con);
    }
?>