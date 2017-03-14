<?php
function upload_image(){
    $allowed_types=array();
 $allowed_types[]='image/gif';
 $allowed_types[]='image/jpeg';
 $allowed_types[]='image/jpg';
 $allowed_types[]='image/pjpeg';
 $allowed_types[]='image/x-png';
 $allowed_types[]='image/png';
 if(! in_array($_FILES["file"]["type"] , $allowed_types))
{ include('errors/wrong_file_type.php');
  exit();
}

    $temp_name=$_FILES['file']['tmp_name'];
//echo $temp_name;
$path= getcwd().DIRECTORY_SEPARATOR.'upload';
$name=$_FILES['file']['name'];
$path=$path.DIRECTORY_SEPARATOR.$name;
//echo $path;
//echo exec('whoami');
$success= move_uploaded_file($temp_name, $path);
//echo $_FILES['file']['error'];

if($success){
    $upload_message=$name.' has been uploaded.';
    echo $upload_message;
}
else{
    echo 'bad';
}
}

function delete_article($filename){
    $path=$_SESSION['path'];
    $dir=$path.DIRECTORY_SEPARATOR.$filename;
    unlink($dir);
    echo 'delete successfully';
}

function delete_image($filename){
    $path1=$_SESSION['path1'];
    
//    echo $path1;
//    echo$filename;
    $dir=$path1.DIRECTORY_SEPARATOR.$filename;
    if (unlink($dir))
    {    echo 'delete successfully';}
    
}

function upload_article(){
 $allowed_types=array();
 $allowed_types[]='text/plain';
 if(! in_array($_FILES["file"]["type"] , $allowed_types))
{ include('errors/wrong_file_type.php');
  exit();
}

 $temp_name=$_FILES['file']['tmp_name'];
//echo $temp_name;
$path= getcwd().DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'text file';
$name=$_FILES['file']['name'];
$path=$path.DIRECTORY_SEPARATOR.$name;
//echo $path;
//echo exec('whoami');
$success= move_uploaded_file($temp_name, $path);
//echo $_FILES['file']['error'];

if($success){
    $upload_message=$name.' has been uploaded.';
    echo $upload_message;
}
else{
    echo 'bad';
}
    
}
?>