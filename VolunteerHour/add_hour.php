<?php 
require_once '../util/main.php';
require_once '../util/validation.php';
include '../view/header.php';
include '../view/sidebar.php';
?>
<div id="content">
    <h1>Volunteer Hour - <?php echo 'Add hour'; ?></h1>
    <form action="display_hour.php" method="post" id="add_hour_form">

        <p><label>Your name:</label>
        <input type="text" name="name" size="50" /><br /></p>

        <p><label>Hours that you volunteered(use .25/.5/.75) :</label>
        <input type="number" name="hours" step="any" min="0"/> <br /></p>

        <p><label>Time started:</label>
        <input type="time" name="time"/><br /></p>
        
        <p><label>Date:</label>
        <input type="date" name="date" /> <br /></p>
        
        
        <p><label>Lambda or Free hour:</label>
        <input type="radio" name="hour_type" value="lambda" /> lambda 
        <input type="radio" name="hour_type" value="free" /> free <br /></p>

        
        <p><label>Logged in Lawrence website?:</label>
        <input type="radio" name="if_logged_in" value="Y"/> Y
        <input type="radio" name="if_logged_in" value="N"/> N <br /></p>


        <p><label>Event Description:</label><br />
        <textarea name="description" rows="10"cols="50"></textarea>
        <br /></p>

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
</form>
</div>
<?php
include '../view/footer.php'; ?>