<?php
require "conn.php";

//Register function
function reg() {
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql = "INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
