<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<h2>Welcome!</h2>
<p>You are logged in.</p>
<a href="logout.php">Logout</a>