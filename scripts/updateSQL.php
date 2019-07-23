<?php 
include "config.php";

if(isset($_POST['ready'])){

$sql = "UPDATE orderlist SET ID=00001 WHERE Status='ready for pick up'";

}
?>