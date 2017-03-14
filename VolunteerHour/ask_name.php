<?php 
require_once '../util/main.php';
include '../view/header.php'; 
include '../view/sidebar.php';
$dir=0;
$_SESSION['choice']=$dir;
?>

<form action="get_all_hours.php" method="post" id="add_name_form">
    <p><label>Your name:</label>
    <input type="text" name="name" size="50" /> </p>

    <p><label>&nbsp;</label>
    <input type="submit" value="Submit" /></p>
</form>

<?php

include '../view/footer.php';
?>