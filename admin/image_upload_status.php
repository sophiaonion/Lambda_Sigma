<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../model/file_manager.php';

if ($_POST['text']!=""){
    $name=$_POST['text'];
    //echo $name;
    delete_image($name);
}else{//upload article
upload_image();
}

include '../view/footer.php'; 
?>