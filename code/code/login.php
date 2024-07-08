<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Way Boat Safari</title>
    
    
    <link rel="stylesheet" href="header.css">         
</head>
<body>
    <div class="column">
        <div class="row">
            <img src = "boat.jpg" alt="Logo" width="100" hight="100"> 
           <p id="Title">Blue Way boat Safari</p><br></div> </div>


    <hr>
    
    <ul>
        <li title="GO to Home Page"><a href="index.php">Home</a></li>
        <li title="Go to the Gallery"><a href="gallery.php">Gallery</a></li>
        <li title="Visit Packages"><a href="package.php">Packages</a></li>
        <li title="Contact Guide"><a href="FAQ.php">Guide</a></li>
        <li title="Locations"><a href="location.php">Locations</a></li>
        <li title="About Us"><a href="#about us">About Us</a></li>
        <li title=" To login"><a href="login.php">Loging</a></li>
        <li title=" To Register"><a href="usercreate.php">Register</a></li>
        <li title=" Review"><a href="reviewcreate.php">Review</a></li>
        <li title=" FAQ"><a href="FAQ.php">FAQ</a></li>
    </ul>


<link rel="stylesheet" href="login.css">
<div class="container">
    
<form id="form" method="post">
    <h1>Logi Page</h1>
<h2>User Name : </h2><br>
<div class= "input-control">
<lable for="username">Username</lable>
 <input id="username" placeholde="Username" type=text/><br><br><br>
</div>
<div class= "input-control">
<lable for="username">Username</lable>
 <input id="password" placeholde="Password" type=text/><br><br><br>
</div>
 </form>
    <button onclicktype="submit">Login</button><br><br><br>
<br>
<h1>or</h1><br><br>

<table class="login1">
    <tr>
        <td>
            <a href="https://www.facebook.com/help/668969529866328"><img src="download (5).jfif" width="200"></a>
        </td>
        <td>
            <a href="https://help.twitter.com/en/using-twitter/tweet-and-moment-url"><img src="download (3).png" width="200"></a>
        </td>
        <td>
            <a href="https://google.com/"><img src="download (4).png" width="200" ></a>
        </td>
    </tr>
</table>
<br>
<br><br><br><br><br><br>


<?php
include_once 'footer.php'
?>