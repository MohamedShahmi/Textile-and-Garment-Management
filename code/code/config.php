<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "boatsafari";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn)
    {
        die(mysqli_error($conn));
    }
?>
