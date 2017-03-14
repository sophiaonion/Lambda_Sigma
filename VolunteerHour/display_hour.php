<?php 
require_once '../util/main.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../model/volunteer_hour_db.php';
 
        $name=$_POST['name'];
        $hours=$_POST['hours'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $hour_type=$_POST['hour_type'];
        $if_logged_in=$_POST['if_logged_in'];
        $description=$_POST['description'];
?>

<div id="content">
<form action="" method="post" id="display_hour_form">
<p> Name: <?php echo $name; ?> </p>
<p> Hours: <?php echo $hours; ?> </p>
<p> Time Started: <?php echo $time; ?> </p>
<p> Date: <?php echo $date; ?> </p>
<p> Hour Type: <?php echo $hour_type; ?> </p>
<p> If logged in Lawrence Website?: <?php echo $if_logged_in; ?> </p>
<p> description: <?php echo $description; ?> </p>

<label>&nbsp;</label>
<input type="submit" value="Edit" formaction="edit.php" />
        
<label>&nbsp;</label>
<input type="submit" value="Submit" formaction="submit_successful.php"  />
</form>

<?php 

$_SESSION['name']=$name;
$_SESSION['hours']=$hours;
$_SESSION['time']=$time;
$_SESSION['date']=$date;
$_SESSION['hour_type']=$hour_type;
$_SESSION['if_logged_in']=$if_logged_in;
$_SESSION['description']=$description;

include '../view/footer.php'; ?>
