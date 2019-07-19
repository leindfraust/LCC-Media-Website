<?php
include "data-display.php";

$condition = "1";
if(isset($_GET['ID'])){
   $condition = " id=".$_GET['ID'];
}
$userData = mysqli_query($con,"SELECT * from orders WHERE ".$condition);

$response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);

exit;
