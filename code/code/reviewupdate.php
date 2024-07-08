<?php
include_once 'header.php'
?>

<?php
    include 'config.php';
$id=$_GET['updateid'];
$query="SELECT *FROM review WHERE id= $username";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
     $username = $row['username'];
     $email = $row['email'];
     $pkg = $row['pkg'];
     $comment = $row['comments'];


    if(isset($_POST['Update']))
    {
         $username = $_POST['username'];
         $email = $_POST['email'];
         $pkg = $_POST['pkg'];
         $comment = $_POST['comments'];
    
            $query="UPDATE reguser set username= '$username' ,
            email='$email', pkg ='$pkg', comments='$comments'
WHERE id = $username";
            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:reviewview.php');
    }
    else{
        echo "Error" ;
    }
}
?>


<link rel="stylesheet" href="Register.css">
    <div class="container">
<form method="post">
 <div class="reg">
    <br>
<div class="title">
    <b><u>Review</u></b>
    </div> <br><br>
    <div class="form">
        <div class="input_details">

    <label><b>User Name</b></label><br>
    <input type="text" class="input" name="username"><br><br>

    <label><b>Email</b></label><br>
    <input type="email" class="input"name="email"><br><br>

    <label><b>Package</b></label><br>
    <input type="text" class="input" name="pkg"><br><br>

    <label><b>Comment</b></label><br>
    <input type="text"class="input" name="comments"><br><br>
    <br>
    <button name="Update">Update</button>
</div>
</form>