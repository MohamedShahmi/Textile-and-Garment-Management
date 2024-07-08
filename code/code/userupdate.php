<?php
include_once 'header.php'
?>

<?php
    include 'config.php';
$id=$_GET['updateid'];
$query="SELECT *FROM reguser WHERE id= $id";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
     $fullname = $row['fullname'];
     $username = $row['username'];
     $email = $row['email'];
     $mobileno = $row['mobileno'];
     $pass = $row['pass'];


    if(isset($_POST['Update']))
    {
         $fullname = $_POST['fullname'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $mobileno = $_POST['mobileno'];
         $pass = $_POST['pass'];
    
            $query="UPDATE reguser set fullname ='$fullname',username= '$username' ,
            email='$email', mobileno ='$mobileno', pass='$pass'
WHERE id = $id";
            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:userview.php');
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
    <b><u>Registration</u></b>
    </div> <br><br>
    <div class="form">
        <div class="input_details">
 <label><b>Full Name</b></label><br>
    <input type="text" class="input" name="fullname"><br><br>

    <label><b>User Name</b></label><br>
    <input type="text" class="input" name="username"><br><br>

    <label><b>Email</b></label><br>
    <input type="email" class="input"name="email"><br><br>

    <label><b>Mobile Number</b></label><br>
    <input type="text" class="input" name="mobileno"><br><br>

    <label><b>Create a Password</b></label><br>
    <input type="password"class="input" name="pass"><br><br>
    <br>
    <button name="Update">Update</button>
</div>
</form>

