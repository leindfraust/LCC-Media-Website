<?php 
include "config.php";

    $index = "ID=".$_GET['IDNo']; 

    $sql = "UPDATE orderlist SET Status='ready for pick-up/delivery' WHERE ".$index;

    if (mysqli_query($con, $sql)) {
    echo 'Record updated successfully click <a href="../data-display.php">here</a> to return';
    } else {
    echo "Error updating record: " . mysqli_error($con);
    }
?>
