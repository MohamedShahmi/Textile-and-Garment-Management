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
            <th scope="col">Username </th>
            <th scope="col">Email </th>
            <th scope="col">Mobile No </th>
            <th scope="col">Password </th>
            </tr>
        </thread>
        <tbody>
       <?php
    $query = "SELECT * FROM reguser";
    $result = mysqli_query($conn,$query);
    if($result) {
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
        $fullname = $row['fullname'];
         $username = $row['username'];
         $email = $row['email'];
         $mobileno = $row['mobileno'];
         $pass = $row['pass'];
         echo '    <tr scope = "$row">
         <td>'.$id.'</td> 
         <td>'.$fullname.'</td>
         <td>'.$username.' </td>
         <td>'.$email.' </td>
         <td>'.$mobileno.' </td>
         <td>'.$pass.' </td>
         <td>
    <button><a href="userupdate.php?updateid='.$id.'">Edit</a></button>
    <button><a href="userdelete.php?deleteid='.$id.'">Delete</a></button>
    </td>
     </tr>';
        }
    }
    
?> 

</tbody>
</table>

            
                
        

               
