<?php
if (isset($_POST['signup'])) {
    $username = $_POST['user_email'];
    $password = $_POST['user_password'];

    //CRUD (Create Read Update Delete)
    // prepare SQL query  (INSERT)
    // execute SQL query    
    // Query if successful send to Dashboard.php else explore.php
} else {
    header("location:../explore.php");
}