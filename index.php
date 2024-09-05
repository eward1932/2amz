<?php include('filter.php'); ?>
<?php
ob_start();
session_start();
include 'config.php';

header('Location: login');
?>
