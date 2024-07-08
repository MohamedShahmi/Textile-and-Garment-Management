<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yashoda";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM Registerduser WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // User is authenticated
        // Example redirect after successful login
        header('Location: newarrivals.html');
        exit();
    } 
	else {
        // Invalid credentials
        echo "Invalid username or password";
    }
}
?>
