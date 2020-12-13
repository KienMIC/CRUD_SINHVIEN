<?php 
include('lib.php');
$ID = isset($_GET['id']) ? (int)$_GET['id'] : '';
del_sv($ID);
header('location:index.php');
?>