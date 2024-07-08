<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

    $query = "DELETE FROM packages WHERE id = '$id' ";

    $result = mysqli_query($conn,$query);

    if($result) {
        header('location:packageview.php');
    }
    else{
        echo "Error";
    }
}
?>