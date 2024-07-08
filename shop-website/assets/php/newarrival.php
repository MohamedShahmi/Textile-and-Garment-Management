<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "newarrivals";

//create connection
$con = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
//fetch all data from new arrival table
$sql = "SELECT * FROM new_arrivals";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    echo "
    <table border='1' width='80%'>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Product ID</th>
    </tr>";

    // Loop through each row of the result and display it in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["product_name"] . "</td>
        <td>Rs. " . $row["price"] . "</td>
        <td>" . $row["product_id"] . "</td>
     </tr>";
    }

    echo "</table>";

} 

else {
    echo "No new arrivals found";
}


?>