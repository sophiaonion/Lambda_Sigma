<?php
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../util/file_extension.php';
require_once '../util/images.php';

$path='../admin/upload/';
$file_list=array();
$file_list=scandir($path);

?>
<td id="product_image_column" >
            <?php    foreach (array_slice($file_list,2) as $filename):
                $ctype=file_extension($filename);
                if ($filename!='.DS_Store'){
                    //process_image($path, $filename);
                        header('Content-type: ' . $ctype);?>
                <p><img src="<?php echo $path.$filename; ?>"
                     alt=<?php echo$filename;?> > </p>
                <?php }  endforeach; ?>    
            </td>
<?php         
include '../view/footer.php';
?>