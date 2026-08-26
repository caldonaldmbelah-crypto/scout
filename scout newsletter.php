<?php
// htdocs/scouts/newsletter.php
include 'header.php';
if (!isset($_SESSION["scout_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>newsletter</title>
    <link rel="stylesheet" href="my style.css">
</head>
<body>
    <h2>Chanikiwiti ScoutsNewsletter</h2>
    <p>The below link directs you to the Chanikiwiti Scouts Newsletter as was at 29th march 2025.<br>Here you are able to see diffrent views and memorable moments of the chanikiwiti scouts in taita taveta.<br>Click on the link to proceed to the newspaper page.<br>Enjoy.</p>
 <!--chanikiwiti scouts newsletter-->
 <a href="s_newsletter.pdf" target="_blank">Chanikiwiti Scouts Newsletter</a>
</body>
</html>