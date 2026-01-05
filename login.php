<?php
include "db.php";

$email    = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo "Please fill all fields.";
    exit();
}

$sql = "SELECT * FROM students 
        WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo "Login successful";
} else {
    echo "Invalid email or password";
}
?>
