<?php
require_once '../util/main.php';
require_once '../util/validation.php';
include '../view/header.php';
include '../view/sidebar.php';
require_once '../model/volunteer_hour_db.php';
//require_once '../model/cart.php';

?>

<li><a href="<?php echo $app_path;?>VolunteerHour/add_hour.php" >Add Hour</a> </li>
<li><a href="<?php echo $app_path;?>VolunteerHour/ask_name.php" >See your hours</a></li>

<?php
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view';
}

switch ($action) {
    case 'view':
        //$cart = cart_get_items();
        break;
    case 'add':
       $name=$_POST['name'];
        $hours=$_POST['hours'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $hour_type=$_POST['hour_type'];
        $if_logged_in=$_POST['if_logged_in'];
        $description=$_POST['description'];
        break;
    default:
        add_error("Unknown action: " . $action);
        break;
}
include 'view/footer.php';
?>
