<?php
    include 'config.php';
$id=$_GET['updateid'];
$query="SELECT *FROM packages WHERE id= $id";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

     $id = $row['id'];
     $loc = $row['loc'];
     $price = $row['price'];
     $dsp = $row['dsp'];

    if(isset($_POST['Update']))
    {
         $id = $_POST['id'];
         $loc = $_POST['loc'];
         $price = $_POST['price'];
         $dsp = $_POST['dsp'];
    
            $query="UPDATE packages set id ='$id',loc= '$loc' ,
            price='$price',dsp ='$dsp'
WHERE id = $id";
            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:packageview.php');
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
    <b><u>Add Packages</u></b>
    </div> <br>
    <div class="form">
        <div class="input_details">
 <label><b>Pkg_ID</b></label><br>
    <input type="text" class="input" name="id"><br>

    <label><b>Location</b></label><br>
    <input type="text" class="input" name="loc"><br>

    <label><b>Price</b></label><br>
    <input type="text" class="input"name="price"><br>

    <label><b>Description</b></label><br>
    <input type="text" class="input" name="dsp"><br>

    <button name="submit">submit</a></button>
</div>
</form> 
</div>
</form>