<?php
session_start();
$id =  $_SESSION['name'];

include("../database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigatiom.css">
</head>
<style>
    body {
        background-image: url(./cuspic/1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
    .welcome
    {
        width: 1300px;
        height: 717px;
        margin: 100px auto;
        margin-top: 110px;
        margin-bottom: 0px;
        border-radius: 20px;
    }
    .welcome .welcome_photo
    {
        border-radius: 20px;
        box-shadow: 0 0 10px;
    }
    .con1
    {
        width: 1300px;
        height: 400px;
        margin: 0 auto;
        margin-top: 40px;
        border-radius: 20px;
        box-shadow: 0 0 10px;
        background-color: white;
        position: relative;
    }
    .picture
    {
        width: 600px;
        height: 350px;
        position: absolute;
        top: 25px;
        left: 40px;
    }
    .picture img
    {
        border-radius: 20px;
    }
    .dec
    {
        height: 350px;
        width: 600px;
        position: absolute;
        background-color: #f8f8f8;
        top: 20px;
        right: 40px;
        border-radius: 20px;
        text-align: justify;
        text-align: center;
        font-size: 30px;
    }
    .picture2
    {
        width: 600px;
        height: 350px;
        position: absolute;
        top: 25px;
        right: 40px;
    }
    .picture2 img
    {
        border-radius: 20px;
    }
    .dec2
    {
        height: 350px;
        width: 600px;
        position: absolute;
        background-color: #f8f8f8;
        top: 30px;
        left: 40px;
        border-radius: 20px;
        text-align: justify;
        text-align: center;
        font-size: 30px;
    }
    .picture3
    {
        width: 600px;
        height: 350px;
        position: absolute;
        top: 25px;
        left: 40px;
    }
    .picture3 img
    {
        border-radius: 20px;
    }
    .dec3
    {
        height: 350px;
        width: 600px;
        position: absolute;
        background-color: #f8f8f8;
        top: 20px;
        right: 40px;
        border-radius: 20px;
        text-align: justify;
        text-align: center;
        font-size: 30px;
    }
    .picture4
    {
        width: 600px;
        height: 350px;
        position: absolute;
        top: 25px;
        right: 40px;
    }
    .picture4 img
    {
        border-radius: 20px;
    }
    .dec4
    {
        height: 350px;
        width: 600px;
        position: absolute;
        background-color: #f8f8f8;
        top: 30px;
        left: 40px;
        border-radius: 20px;
        text-align: justify;
        text-align: center;
        font-size: 30px;
    }
    .pic1
    {
        width: 600px;
        height: 350px;
        position: absolute;
        top: 25px;
        right: 350px;
    }
    .pic1 img
    {
        border-radius: 20px;
    }
    .chicken
    {
        position: absolute;
        top: 30px;
    }
    .witch
    {
        position: absolute;
        overflow: clip;
        transform: scaleX(-1);
        right: 7px;
        top: 30px;
    }
    .copyright {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: -40px;
    width: 100%;
    }
</style>
<body>
    <?php
    include("./header.php");
    ?>

    <div class="welcome">
        <img class="welcome_photo" src="../photo/WELCOME TO COLIFE.png" alt="" width="1300px" height="717px">
    </div>
    <div class="con1">
        <div class="picture">
            <img src="../photo/mainpage1.jpg" alt="mainpage1">
        </div>
        <div class="dec">
            <br><br><br><br>
            <div>COLIFE provides various of choice for all customers. It is suitable for all age people.</div>
        </div>
    </div>

    <div class="con1">
        <div class="picture2">
            <img src="../photo/mainpage2.jpg" alt="mainpage2">
        </div>
        <div class="dec2">
            <br><br><br><br>
            <div>Enjoy your Fashion in COLIFE !!!</div>
        </div>
    </div>

    
    <div class="con1">
        <div class="picture3">
            <img src="../photo/mainpage3.jpg" alt="mainpage3">
        </div>
        <div class="dec3">
            <br><br><br><br>
            <div>New Skirt Arrival <br>
                Crinkle Cotton Tiered Skirt <br>
                RM 129.90</div>
        </div>
    </div>

    <div class="con1">
        <div class="picture4">
            <img src="../photo/mainpage4.jpg" alt="mainpage4">
        </div>
        <div class="dec4">
            <br><br><br><br>
            <div>COLIFE has many brands of clothes for customers to choose. Our aim is to make customers wear comfortably.</div>
        </div>
    </div>

    <div class="con1">
        <div class="pic1">
            <a href="https://squadbusters.supercell.com/" target="_blank">
                <img src="../advertisement/squad_buster/squad_buster.jpg" alt="SQUARD BUSTER" title="SQUARD BUSTER">
            </a>
        </div>
        <img class="chicken" src="../advertisement/squad_buster/chicken-evo-large.gif" alt="chicken" width="350" height="350">
        <img class="witch" src="../advertisement/squad_buster/witch_baby-medium.gif" alt="witch" width="350" height="350">
    </div>
    
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>