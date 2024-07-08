<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register User  </title>    
<style>
table th,td,tr{
    text-align:center;
    width:1250px;
    border:1px solid black;
}
    </style>
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
            <tr scope="$row">
            <th scope="col">Username </th>
            <th scope="col">Email </th>
            <th scope="col">Pkg_ID </th>
            <th scope="col">comments</th>
            </tr>
        </thread>
        <tbody>
       <?php
    $query = "SELECT * FROM review";
    $result = mysqli_query($conn,$query);
    if($result) {
        while($row=mysqli_fetch_assoc($result))
        {
         $username = $row['username'];
         $email = $row['email'];
         $pkg = $row['pkg'];
         $comments = $row['comments'];
         echo '    <tr scope = "$row">
         <td>'.$username.' </td>
         <td>'.$email.' </td>
         <td>'.$pkg.' </td>
         <td>'.$comments.' </td>
         <td>
    <button><a href="reviewupdate.php?updateid='.$username.'">Edit</a></button>
    <button><a href="reviewdelete.php?deleteid='.$username.'">Delete</a></button>
    </td>
     </tr>';
        }
    }
    
?> 