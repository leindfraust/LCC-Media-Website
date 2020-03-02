<?php
include 'config.php';


$getID = $_GET['ID'];


$userData = mysqli_query($con,"SELECT * from orderlist WHERE ID='$getID'");

$response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);

exit;
?>
