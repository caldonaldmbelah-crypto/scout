<?php
// htdocs/scouts/notes.php
include 'header.php';
if (!isset($_SESSION["scout_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scout Notes</title>
    <link rel="stylesheet" href="my style.css">
</head>
<body>
    <h2>Scout Notes</h2>
    <p>Welcome, Scout! Here are your confidential notes.</p>
    <p>click the following link to access diffrent scout leaning materials</p>
    <a href="history of scout.pdf" target="_blank">scout history</a>
    <br>
    <a href="scout law.html" target="_blank">scout law</a>
    <br>
    <a href="scout promise.html" target="_blank">scout promise</a>
    <br>
    <a href="patrol system.html" target="_blank">patrol system</a>
    <br>
    <a href="scout training.pdf" target="_blank"> scout training</a>
    <br>
    <a href="scout first aid.pdf" target="_blank">first aid</a>
    <br>
    <a href="scout knots.pdf" target="_blank">scouting knots</a>
</body>
</html>

