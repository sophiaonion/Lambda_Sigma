<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../model/volunteer_hour_db.php';

$name=$_SESSION['name'];
        $hours=$_SESSION['hours'];
        $time=$_SESSION['time'];
        $date=$_SESSION['date'];
        $hour_type=$_SESSION['hour_type'];
        $if_logged_in=$_SESSION['if_logged_in'];
        $description=$_SESSION['description'];
        
$dir=1;
$_SESSION['choice']=$dir;
?>

<?php add_hour($name, $hours, $time, $date, $hour_type, $if_logged_in, $description);?>
<p>Submit Successfully! </p>

<p>Want to view your volunteer record? </p>

<form action="get_all_hours.php" method="post" id="edit_hour_form">
<p> <label>&nbsp;</label>
 <input type="submit" value="click here!" /> 
 </p>
</form>

<?php 
$_SESSION['name']=$name;
include '../view/footer.php'; ?>