<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

    $query = "DELETE FROM reguser WHERE id = '$id' ";

    $result = mysqli_query($conn,$query);

    if($result) {
        header('location:userview.php');
    }
    else{
        echo "Error";
    }
}
?>