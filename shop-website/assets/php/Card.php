<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "iwt";


$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $Coundry = $_POST["Country"];
    $contnum = $_POST["ContactNumber"];
    $Address = $_POST["Address"];

    // Save user information into the database
    $sql = "INSERT INTO register (FullName, Email, Country, ContactNumber, Address,) VALUES ('$fullName', '$Email ', '$Coundry', '$contnum','$Address')";

    if (mysqli_query($conn, $sql)) {
        echo "successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);

?>
