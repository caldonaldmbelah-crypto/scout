<?php
// htdocs/scouts/login.php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scout Login</title>
    <style>
        body
{
    background-image: url('mark.jpg'); 
}
    </style>
</head>
<body>
    <h2>Scout Login</h2>
    <form id="loginForm" action="login_process.php" method="post">
        <fieldset>
            <legend>Login Incredentials</legend>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        </fieldset>
        <br><br>
        <input type="submit" value="Login">
    </form>
    <br>
<br>
</body>
</html>
