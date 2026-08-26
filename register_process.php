<?php
// htdocs/scouts/register_process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Database Connection
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "scout_db";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO scouts (name, email, password, repeat_password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $repear_password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
