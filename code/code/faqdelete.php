<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

    $query = "DELETE FROM faq WHERE username = '$username' ";

    $result = mysqli_query($conn,$query);

    if($result) {
        header('location:faqview.php');
    }
    else{
        echo "Error";
    }
}
?>