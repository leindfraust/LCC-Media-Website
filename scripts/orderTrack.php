<?php
include 'config.php';


$getID = $_GET['ID'];
$getST = $_GET['ShirtType'];
$getOIG = $_GET['OIG'];


$userData = mysqli_query($con,"SELECT * from orderlist WHERE ID='$getID' AND OIG='$getOIG' AND ShirtType='$getST' ");

$response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);

exit;
?>
