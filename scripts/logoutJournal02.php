<?php
session_start();
session_unset();
session_destroy();
header('location:../journal-page02.php');
?>