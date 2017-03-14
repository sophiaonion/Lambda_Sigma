<?php 
require_once '../util/main.php';
include '../view/header.php'; 
include '../view/sidebar.php';

$name=$_SESSION['name'];
$hours=$_SESSION['hours'];
$time=$_SESSION['time'];
$date=$_SESSION['date'];
$hour_type=$_SESSION['hour_type'];
$if_logged_in=$_SESSION['if_logged_in'];
$description=$_SESSION['description'];

?>
<div id="content">
    <h1>Volunteer Hour - <?php echo 'Add hour'; ?></h1>
    <form action="display_hour.php" method="post" id="edit_hour_form">

        <label>Your name:</label>
        <input type="text" name="name" size="50" value="<?php echo $name?>"/><br />

        <label>Hours that you volunteered(use .25/.5/.75) :</label>
        <input type="number" name="hours" value="<?php echo $hours; ?>"/> <br />

        <label>Time started:</label>
        <input type="time" name="time" value="<?php echo $time; ?>"/><br />
        
        <label>Date:</label>
        <input type="date" name="date" value="<?php echo $date; ?>" /> <br />

        <label>Lambda or Free hour:</label>
        <?php
        if ($hour_type == "lambda") {
           echo "<input type='radio' name='hour_type' value='lambda' checked />lambda";
           echo "<input type='radio' name='hour_type' value='free' />free";
        } else {
           echo "<input type='radio' name='hour_type' value='lambda' />lambda";
           echo "<input type='radio' name='hour_type' value='free' checked/>free";
            if ($hour_type == "free") {
            echo "<input type='radio' name='hour_type' value='lambda' />lambda";
                echo "<input type='radio' name='hour_type' value='free' checked/>free";
            }
            else{
              echo "<input type='radio' name='hour_type' value='lambda' checked />lambda";
              echo "<input type='radio' name='hour_type' value='free'/>free";
              }
        }
        ?>
        <br />


        <label>Logged in Lawrence website?:</label>
        <?php
        if ($if_logged_in == "Y") {
           echo "<input type='radio' name='if_logged_in' value='Y' checked/>Y";
           echo "<input type='radio' name='if_logged_in' value='N'/>N";
        } else {
          echo "<input type='radio' name='if_logged_in' value='Y'/>Y";
          echo "<input type='radio' name='if_logged_in' value='N' checked/>N";
          if ($if_logged_in == "N") {
            echo "<input type='radio' name='if_logged_in' value='Y'/>Y";
            echo "<input type='radio' name='if_logged_in' value='N' checked/>N";
          }else {
              echo "<input type='radio' name='if_logged_in' value='Y' checked/>Y";
              echo "<input type='radio' name='if_logged_in' value='N'/>N";
          }
        
        }
        ?>
        <br />


        <label>Event Description:</label><br />
        
        <textarea name="description" rows="10"cols="50"><?php echo $description; ?></textarea>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" action="display_hour.php" />
    </form>

</div>
<?php include '../view/footer.php'; ?>