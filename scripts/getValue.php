<?php 
include "scripts/config.php";

$condition = "1";
if(isset($GET_['ID'])){
    $condition = " ID=".$_GET['ID'];
}
?>