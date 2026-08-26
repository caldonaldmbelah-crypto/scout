<?php
// htdocs/scouts/header.php
session_start();
echo '<header>';
echo '  <nav>';
echo '    <a href="register.php">Register</a> |';
if (isset($_SESSION["scout_id"])) {
    echo '    <a href="notes.php">Scout Notes</a> |';
    echo '    <a href="contacts.php">Contacts</a> |';
    echo '    <a href="scout newsletter.php">scout newsletter</a> |';
    echo '    <a href="photos.php">Scout photos and videos</a> |';
    echo '    <a href="logout.php">Logout</a>';
} else {
    echo '    <a href="login.php">Login</a> |';
}
echo '  </nav>';
echo '</header>';
?>
