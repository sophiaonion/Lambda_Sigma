<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../model/file_manager.php';


if ($_POST['text']!=""){
    $name=$_POST['text'];
    delete_article($name);
}else{//upload article

    upload_article();
}
        
include '../view/footer.php'; 
?>