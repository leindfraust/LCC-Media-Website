<?php
include 'config.php';

$condition = "1";
if(isset($_GET['ID'])){
   $condition = " ID=".$_GET['ID'];
}

$conditionTwo = "1";
if(isset($_GET['OIG'])){
   $conditionTwo = $_GET['OIG'];
}
$conditionThree = "1";
if(isset($_GET['ShirtType'])){
   $conditionThree = $_GET['ShirtType'];
}

$userData = mysqli_query($con,"SELECT * from orderlist WHERE '$condition' AND OIG='$conditionTwo' AND ShirtType='$conditionThree' ");

$response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);

exit;
?>
