<?php

function file_extension($filename){
     $file_extension = strtolower(substr(strrchr($filename,"."),1));
echo $file_extension;
     switch( $file_extension ) {
    case "gif": $ctype="image/gif"; break;
    case "png": $ctype="image/png"; break;
    case "jpeg":$ctype="image/jpeg"; break;
    case "jpg": $ctype="image/jpg"; break;
    default:
        $ctype="";break;
}
return $ctype;
}

?>