<?php
include_once 'header.php'
?>

<?php
    include 'config.php';
$id=$_GET['updateid'];
$query="SELECT *FROM faq WHERE id= $id";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
     $username = $row['username'];
     $pass = $row['pass'];
     $prob=$row['prob'];

    if(isset($_POST['Update']))
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $prob = $_POST['prob'];
   
            $query="UPDATE faq set username= '$username' ,
              pass='$pass', prob= '$prob';
WHERE id = $id";
            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:faqview.php');
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
    <b><u>FAQ</u></b>
    </div> <br><br>
    <div class="form">
        <div class="input_details">

    <label><b>User Name</b></label><br>
    <input type="text" class="input" name="username"><br><br>

    <label><b>Create a Password</b></label><br>
    <input type="password"class="input" name="pass"><br><br>

    <label><b>Enter Problem</b></label><br>
    <input type="text" class="input" name="prob"><br><br>

    <br>
    <button name="submit">submit</button>
</div>
</form> 
</body>
</html>