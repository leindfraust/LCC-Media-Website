<?php 
include 'config.php';

$condition = "1";
if(isset($_GET['ID'])){
   $condition = " ID=".$_GET['ID'];
}
?>
