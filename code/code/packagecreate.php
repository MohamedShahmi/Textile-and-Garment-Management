<?php
include_once 'headerA.php'
?>

<link rel="stylesheet" href="updates.css">

<h2> New Packages </h2>
    <table class="tab1">
        <tr>
            <td>
                <img src="images (3).jfif" width="230"hight="230">
            </td>
            <td>
                <img src="Madu-River-Baot-Safari-8.jpg"width="200"hight="200">
            </td>
            <td>
                <img src="images.jfif"width="225"hight="225">
            </td>
            <td>
                <img src="amaya-lake-095-1.jpg"width="225"hight="225">
            </td>
            <td>
                <img src="download (2).jfif"width="200"hight="200">
            </td>
        </tr>
        <tr>
            <td>
                Pkg_ID: PK016<br>
                <b>Couple-Tour</b><br>
                Location: <br>
                <b>Nuwara-Eliya Gregory Lake</b><br>
                Price: 6000/=
            </td>
            <td>
                Pkg_ID: PK017<br>
                <b>12 members can join</b><br>
                Location: <br>
                <b>Madu River-Benthota</b><br>
                Price: 8000/=
                
            </td>
            <td>
                Pkg_ID: PK018<br>
                <b>Cultural Tour</b><br>
                Location: <br>
                <b>Koggala Lake</b><br>
                Price: 6000/=
            </td>
            <td>
                Pkg_ID: PK019<br>
                <b>Cultural Tour</b><br>
                Location: <br>
                <b>Dambulla</b><br>
                Price: 5000/=
            </td>
            <td>
                Pkg_ID: PK020<br>
                <b>Cultural Tour</b><br>
                Location: <br>
                <b>Hikkaduwa(Dodanduwa)</b><br>
                Price: 4000/=
            </td>
        </tr>
    </table>
    <br><br>
    <?php
    include ("config.php");

    if(isset($_POST['submit']))
    {
        
         $id = $_POST['id'];
         $loc = $_POST['loc'];
         $price = $_POST['price'];
         $dsp = $_POST['dsp'];
        
    
            $query="INSERT INTO packages ( id,loc,price,dsp) 
            values ('$id','$loc','$price','$dsp')";

            $result = mysqli_query($conn,$query);

    if($result) 
    {
        header('location:upsub.php');
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
<?php
include_once 'footer.php'
?>
