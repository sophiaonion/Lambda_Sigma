<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
?>

<form action="article_manager_status.php" method="POST" enctype="multipart/form-data" id="article_manager_form">
<h2>Article Manager</h2>

<?php 
$path=getcwd().'/upload/text file';
$file_list=array();
$file_list=scandir($path);

if(isset($file_list[2]))
{  
  foreach(array_slice($file_list,2) as $filename):
      echo $filename;
      echo "<p></p>";
  endforeach;
    echo "<input type='input' name='text' > <p></p>";
    echo "<input type='submit' value='delete' ><p></p>";
} else {
    echo 'No article file exists.';
}
?>

<p> Upload articles:</p> 
<input type="file" name="file"> 
<p><input type="submit" value="Upload"></p>
</form>

    
<?php 
$_SESSION['path']=$path;
//$_SESSION['file_list']=$file_list;
include '../view/footer.php'; 
?>