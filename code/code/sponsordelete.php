<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

    $query = "DELETE FROM sponsor WHERE id = '$id' ";

    $result = mysqli_query($conn,$query);

    if($result) {
        header('location:sponsorview.php');
    }
    else{
        echo "Error";
    }
}
?>