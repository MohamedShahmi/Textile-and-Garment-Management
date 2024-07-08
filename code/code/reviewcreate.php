<?php
include_once 'header.php'
?>

<?php
    include ("config.php");

    if(isset($_POST['submit']))
    {
        
         $username = $_POST['username'];
         $email = $_POST['email'];
         $pkg = $_POST['pkg'];
         $comment = $_POST['comments'];
    
            $query="INSERT INTO review ( username,email,pkg,comments) 
            values ('$username','$email','$pkg','$comments')";

            $result = mysqli_query($conn,$query);

    if($result) 
    {
        echo " New record created successfully" ;
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
    <button name="submit">submit</button>
</div>
</form> 
<?php
include_once 'footer.php'
?>