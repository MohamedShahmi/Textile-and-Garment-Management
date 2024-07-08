<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $username = $_GET['deleteid'];

    $query = "DELETE FROM review WHERE username = '$username' ";

    $result = mysqli_query($conn,$query);

    if($result) {
        header('location:reviewview.php');
    }
    else{
        echo "Error";
    }
}
?>