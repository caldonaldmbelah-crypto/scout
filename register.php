<?php
// htdocs/scouts/register.php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scout Registration</title>
    <style>
        body
{
    background-image: url('boy.jpg'); 
}
    </style>
</head>
<body>
    <h2>Scout Registration</h2>
    <form id="registrationForm" action="register_process.php" method="post" onsubmit="return validateRegistration()">
        <fieldset>
            <legend>Name</legend>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Password</legend>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="repeat_password">Repeat_Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        </fieldset>
        <br><br>
        <input type="submit" value="Register">
    </form>

    <script>
        function validateRegistration() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            if (name === "") {
                alert("Name is required.");
                return false;
            }

            if (email === "") {
                alert("Email is required.");
                return false;
            } else {
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert("Invalid email format.");
                    return false;
                }
            }

            if (password === "") {
                alert("Password is required.");
                return false;
            } else {
                if (password.length < 8) {
                    alert("Password must be at least 8 characters long.");
                    return false;
                }
            }

            return true;
        }
    </script>
</body>
</html>
