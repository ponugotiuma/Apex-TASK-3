<?php
include "db.php";

$username = $_POST['username'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($phone) || empty($password)) {
    echo "All fields are required.";
    exit();
}

$sql = "INSERT INTO students (username, email, phone, password)
        VALUES ('$username', '$email', '$phone', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
} else {
    echo "Registration failed";
}
?>
