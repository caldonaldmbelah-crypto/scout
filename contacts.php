<?php
// htdocs/scouts/contacts.php
include 'header.php';
if (!isset($_SESSION["scout_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>scout helpline services</title>
    <link rel="stylesheet" href="my style.css">
</head>
<body>
    <h2><u>SCOUT HELPLINE SERVICE PROVIDER</u></h2>
    <p><b>Airtel services:</b> 0739007596</p>
    <p><b>Safaricom services:</b> 0768684832</p>
    <p><b>Telkom services:</b> 0771700401</p>
</body>
</html>