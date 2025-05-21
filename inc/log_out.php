<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../styles/header.css">
</head>

<a href ="../index.php" class="logo"> Debugallica </a>

<?php
session_start();
$_SESSION = array();
session_destroy();
echo "<p>Log Out.</p>"
?>
