<div id="sidebar">
    <ul>
        
            <?php
            // Check if user is logged in and
            // display appropriate account links
            //$account_url = $app_path . 'account';
            //$logout_url = $account_url . '?action=logout';
            //if (isset($_SESSION['user'])) :
           /* ?>
                <li><a href="<?php echo $account_url; ?>">My Account</a></li>
                <li><a href="<?php echo $logout_url; ?>">Logout</a>
            <?php else: ?>
                <li><a href="<?php echo $account_url; ?>">Login/Register</a></li>
            <?php endif; ?> */
            ?>
        
        <h2>Categories</h2>
        <!-- display links for all categories -->
        <li><a href="<?php echo $app_path;?>Articles/about_us.php" >About Us</a> </li>
<!--        <li><a href="http://www.w3.org/">Event Calender</a> </li>-->
        <li><a href="<?php echo $app_path; ?>VolunteerHour" >Volunteer Hour</a></li>
        <li><a href="<?php echo $app_path; ?>PhotoGallery" >Photo Gallery</a></li>
<!--        <li><a href="http://www.w3.org/">Support Us! </a></li>
        <li><a href="http://www.w3.org/">Contact </a></li>-->
        <li><a href="<?php echo $app_path;?>admin">Admin</a></li>
        
    </ul>
</div>