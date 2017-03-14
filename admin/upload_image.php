<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';?>

<h2>Upload Images</h2>
<form action="image_upload_status.php" method="post" enctype="multipart/form-data">
    <?php 
$path1=getcwd().'/upload';
$file_list=array();
$file_list=scandir($path1);

if(isset($file_list[2]))
{  
  foreach(array_slice($file_list,2) as $filename):

      echo $filename;
      echo "<p></p>";
  endforeach;

  ?> <input type='text' name='text' > <p></p>
    <input type='submit' value='delete' > <p></p> 
 <?php   
} else {
    echo 'No article file exists.';
}
?>
    <p> <input type="file" name="file"> </p>
    <input type="submit" value="Upload">
</form>



<?php 
$_SESSION['path1']=$path1;
$_SESSION['file_list']=$file_list;
include '../view/footer.php'; 

?>