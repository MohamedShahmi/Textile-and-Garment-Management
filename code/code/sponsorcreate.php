

<?php
include_once 'header.php'
?>

<?php
    include ("config.php");

    if(isset($_POST['submit']))
    {
        
         $spname = $_POST['spname'];
         $addr = $_POST['addr'];
         $coun = $_POST['coun'];
         $mobileno = $_POST['mobileno'];
         $paymeth = $_POST['paymeth'];
    
            $query="INSERT INTO sponsor ( spname,addr,coun,mobileno,paymeth) 
            values ('$spname','$addr','$coun','$mobileno','$paymeth')";

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

<link rel="stylesheet" href="Sponsor.css">
    <div class="container">
<form method="post">
 <div class="reg">
    <br>
<div class="title">
    <b><u>Sponsor Details</u></b>
    </div> <br><br>
    <div class="form">
        <div class="input_details">
 <label><b>Full Name</b></label><br>
    <input type="text" class="input" name="spname"><br><br>

    <label><b>Address</b></label><br>
    <input type="text" class="input" name="addr"><br><br>

    <label><b>Country</b></label><br>
    <input type="text" class="input"name="coun"><br><br>

    <label><b>Mobile Number</b></label><br>
    <input type="text" class="input" name="mobileno"><br><br>

    <label><b>Payment Method</b></label><br>
    <input type="password"class="input" name="paymeth"><br><br>
    <br>
    <button name="submit">submit</button>
</div>
<br><br>
</form> 
</body>
</html>