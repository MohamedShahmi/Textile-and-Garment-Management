<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upadate Packages</title>    
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
            <th scope="col">Pkg_ID</th> 
            <th scope="col">Location </th>
            <th scope="col">price </th>
            <th scope="col">Description</th>
            </tr>
        </thread>
        <tbody>
       <?php
    $query = "SELECT * FROM  packages";
    $result = mysqli_query($conn,$query);
    if($result) {
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
          $loc = $row['loc'];
          $price = $row['price'];
          $dsp = $row['dsp'];

         echo ' <tr scope = "$row">
         <td>'.$id.'</td> 
         <td>'.$loc.'</td>
         <td>'.$price.' </td>
         <td>'.$dsp.' </td>
         <td>
    <button><a href="packageupdate.php?updateid='.$id.'">Update</a></button>
    <button><a href="packagedelete.php?deleteid='.$id.'">Delete</a></button>
    </td>
     </tr>';
        }
    }
    
?> 
</tbody>
</table>
