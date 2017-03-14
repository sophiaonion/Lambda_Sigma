<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=Lambda_Sigma';
$username = 'root';
$password = 'cmsc250';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>