<?php
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';

$path='../admin/upload/text file';
$file_list=array();
$file_list=scandir($path);

if(isset($file_list[2]))
{  
   foreach (array_slice($file_list,2) as $filename):
     if ($filename!='.DS_Store'){
       $file_url=$path.'/'.$filename;
        $_SESSION['dir']=$file_url;
        
     echo "<a href='display_file.php'>$filename</a> <p></p>";}
   endforeach;
} else {
    echo 'No article exists.';
}


include '../view/footer.php';
?>