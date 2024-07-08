<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yashoda";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST["Register"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pword = $_POST['password'];
    $addr = $_POST['address'];
    $phoneno = $_POST['phoneno'];

    $sql = "CREATE TABLE IF NOT EXISTS Registerduser (
        username VARCHAR(30) PRIMARY KEY,
        email VARCHAR(50) UNIQUE,
        password VARCHAR(30) NOT NULL,
        address VARCHAR(50),
        phone_number VARCHAR(15)
    )";

    if ($con->query($sql) === TRUE) {
        echo "Table Registerduser created successfully";
    } else {
        echo "Error creating table: " . $con->error;
    }

    $sql = "INSERT INTO Registerduser (username, email, password, address, phone_number) VALUES ('$username', '$email', '$pword', '$addr', '$phoneno')";

    if ($con->query($sql)) {
        echo "Registered successfully";
    } else {
        echo "Error: " . $con->error;
    }
}
?>