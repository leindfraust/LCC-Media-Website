<?php
include 'config.php';

$userData = mysqli_query($con,"SELECT * from orderlist WHERE Status='ready for pick-up/delivery' ");

$response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);

exit;
?>
