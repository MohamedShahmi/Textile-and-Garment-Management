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
            <th scope="col">ID </th> 
            <th scope="col">Full Name </th>
            <th scope="col">Address </th>
            <th scope="col">Country </th>
            <th scope="col">Mobile No </th>
            <th scope="col">Payment Method </th>
            </tr>
        </thread>
        <tbody>
       <?php
    $query = "SELECT * FROM sponsor";
    $result = mysqli_query($conn,$query);
    if($result) {
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $spname = $row['spname'];
         $addr = $row['addr'];
         $coun = $row['coun'];
         $mobileno = $row['mobileno'];
         $paymeth = $row['paymeth'];
         echo '    <tr scope = "$row">
         <td>'.$id.'</td> 
         <td>'.$spname.'</td>
         <td>'.$addr.' </td>
         <td>'.$coun.' </td>
         <td>'.$mobileno.' </td>
         <td>'.$paymeth.' </td>
         <td>
    <button><a href="sponsorupdate.php?updateid='.$id.'">Edit</a></button>
    <button><a href="sponsordelete.php?deleteid='.$id.'">Delete</a></button>
    </td>
     </tr>';
        }
    }
    
?> 

</tbody>
</table>