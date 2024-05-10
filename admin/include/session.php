<?php
// session_start(); // Start or resume session

if (!isset($_SESSION['adminSession'])) {
    header('location: login.php?message=Please Sign In First');
    exit;
}

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

// Check if the page is not the lock page and the screen is locked
if (isset($_SESSION['lockscreen']) && $curPageName != "lock.php") {
    // Unset the lockscreen session variable
    unset($_SESSION['lockscreen']);
    $id = $_SESSION['adminSession'];
    session_destroy();
    session_start();
    $_SESSION['ID'] = $id;
    header("location: lock.php");
    exit;
}

// Check if the user clicked logout
if (isset($_GET['logout'])) {
    // Unset the lockscreen session variable
    unset($_SESSION['lockscreen']);
    // Destroy the session
    session_destroy();
    unset($_SESSION['adminSession']);
    // Redirect to the login page
    header("location: login.php");
    exit;
}

// If none of the above conditions are met, the user is authenticated and on a valid page
// Check if adminSession is set, otherwise, redirect to login page
if (!isset($_SESSION['adminSession'])) {
    header("location: login.php");
    exit;
} else {
    $userID = $_SESSION['adminSession'];
}
?>
