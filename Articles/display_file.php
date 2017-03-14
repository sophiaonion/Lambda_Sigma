<?php
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';

$file_url=$_SESSION['dir'];
echo file_get_contents($file_url);

include '../view/footer.php';
?>