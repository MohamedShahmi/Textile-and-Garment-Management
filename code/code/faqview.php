<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>    
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
            <th scope="col">Password </th>
            <th scope="col">Problem </th>
            </tr>
        </thread>
        <tbody>
       <?php
    $query = "SELECT * FROM faq";
    $result = mysqli_query($conn,$query);
    if($result) {
        while($row=mysqli_fetch_assoc($result))
        {
         $username = $row['username'];
         $pass = $row['pass'];
         $prob = $row['prob'];
         echo '    <tr scope = "$row">
         <td>'.$username.' </td>
         <td>'.$pass.' </td>
         <td>'.$prob.' </td>
         <td>
    <button><a href="faqupdate.php?updateid='.$username.'">Edit</a></button>
    <button><a href="faqdelete.php?deleteid='.$username.'">Delete</a></button>
    </td>
     </tr>';
        }
    }
    
?> 

</tbody>
</table>