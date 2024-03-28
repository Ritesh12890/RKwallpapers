<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST[""];
    $password = $_POST[""];

    // Validate login (for demo purposes, just check if username is "admin" and password is "password")
    if ($username === "" && $password === "") {
        // Redirect to a success page or perform other actions
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}
?>