<?php 
include "config.php";
include "getValue.php";

if(isset($_POST['ready'])){

$sql = "UPDATE orderlist SET id='.$condition.' WHERE Status='ready for pick up'";

}
?>