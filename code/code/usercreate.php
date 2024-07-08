
 <?php
include_once 'header.php'
?>

<?php
    include ("config.php");

    if(isset($_POST['submit']))
    {
        
         $fullname = $_POST['fullname'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $mobileno = $_POST['mobileno'];
         $pass = $_POST['pass'];
    
            $query="INSERT INTO reguser ( fullname,username,email,mobileno,pass) 
            values ('$fullname','$username','$email','$mobileno','$pass')";

            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:index.php');
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
    <button name="submit">submit</button>
</div>
</form> 
</body>
</html>
 


    

