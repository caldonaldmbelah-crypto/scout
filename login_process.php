<?php
// htdocs/scouts/login_process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database Connection
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "scout_db";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, password FROM scouts WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($scout_id, $hashed_password);
        $stmt->fetch();
        $password=trim($password);
        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION["scout_id"] = $scout_id;
            header("Location: notes.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>
