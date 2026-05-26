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
    <title>ABOUT US - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigatiom.css">
    
</head>
<style>
    body {
        background-image: url(./cuspic/2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
    .aboutcolife
    {
        margin: 0 auto;
        margin-top: 110px;
        height: 600px;
        width: 1300px;
        background-color: white;
        box-shadow: 0 0 10px;
        border-radius: 15px;
        border: 2px solid black;
        position: relative;
        display: flex;
        justify-content: center;
    }
    .aboutcolife2
    {
        height: 130px;
        width: 1300px;
        margin-top: 10px;
        background-color: yellow;
        display: flex;
        justify-content: center;
    }
    .aboutcolife2 h1
    {
        margin-top: 42px;
        margin-left: 40px;
    }
    .aboutcolife2 .img1
    {
        position: absolute;
        width: 130px;
        height: 130px;
        left: 30px;
    }
    .aboutcolife2 .img2
    {
        position: absolute;
        width: 130px;
        height: 130px;
        right: 30px;
    }
    .aboutcolife3
    {
        height: 440px;
        width: 300px;
        position: absolute;
        top: 148px;
        left: 40px;
    }
    .aboutcolife3 img
    {
        border-radius: 10px;
        box-shadow: 0 0 3px;
    }
    .company
    {
        position: absolute;
        transition: 1s;
    }
    .aboutcolife3:hover .company
    {
        opacity: 0.5;
        transform: scale(0);
    }
.aboutcolife4
{
    height: 446px;
    width: 925px;
    background-color: aqua;
    display: flex;
    position: absolute;
    margin-top: 147px;
    left: 360px;
    border-radius: 15px;
}
.aboutcolife5
{
    height: 406px;
    width: 850px;
    background-color: white;
    display: flex;
    position: absolute;
    top: 20px;
    right: 35px;
    justify-content: center;
    text-align: justify;
    border-radius: 10px;
}
.aboutcolife5 img
{
    opacity: 0.5;
}
.aboutcolife5 p
{
    padding-left: 35px;
    padding-right: 35px;
    position: absolute;
    top: 96px;
    font-weight: 500;
    font-size: 17px;
}
.aboutcolife5:hover img
{
    opacity: 1;
}
    .aboutus
    {
        margin: 0 auto;
        background-image: url(../photo/aboutus_picture.png);
        background-repeat: no-repeat;
        background-size: cover;
        margin-bottom: 10px;
        margin-top: 30px;
        height: 500px;
        width: 1300px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 20px;
        position: relative;
        display: flex;
    }
    .aboutus2
    {
        padding-left: 565px;
    }
    .aboutus3 {
    display: flex;
    justify-content: space-between;
    position: absolute;
    }

.aboutus3 .box {
    height: 250px;
    width: 250px;
    background-color: white;
    margin-left: 150px;
    margin-top: 80px;
}
.aboutus4 {
    display: flex;
    justify-content: space-between;
    position: absolute;
    }
.aboutus4 .box {
    height: 125px;
    width: 250px;
    background-color: #f8f8f8;
    margin-left: 150px;
    margin-top: 330px;
    text-align: center;
}
.vmo
{
    margin: 0 auto;
    margin-bottom: 10px;
    width: 1300px;
    border-radius: 10px;
    background-image: url(../photo/background3.png);
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 0 0 10px;
}
.vmo h1
{
    text-align: center;
    text-transform: uppercase;
    font-size: 40px;
}
.vmo .heading
{
    font-weight: 900;
    font-size: 25px;
}
.vmo ul li
{
    text-align: justify;
    font-size: 20px;
    margin-bottom: 30px;
    padding-right: 20px;
    list-style: none;
}
.vmo .object .square
{
    margin-bottom: 0;
}
.vmo .dot
{
    list-style: circle;
}
.vmo .square
{
    list-style: square;
}
.copyright {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    bottom: 0;
    width: 100%;
}
</style>
<body>
    <?php
    
    include("./header.php");
    ?>

    <div class="aboutcolife">
        <div class="aboutcolife2">
            <img class="img1" src="../logo/logo colife.jpeg" alt="COLIFE LOGO">
            <img class="img2" src="../logo/logo colife.jpeg" alt="COLIFE LOGO">
            <h1>ABOUT COLIFE</h1>
        </div> 
        <div class="aboutcolife3">
        <img class="company" src="../photo/COLIFE company.png" alt="shop">
        <img src="../photo/shop2.png" alt="shop">
        </div>
        <div class="aboutcolife4">
            <div class="aboutcolife5">
                <img src="../photo/cloth icron picture.png" alt="cloth icron">
                <p>Welcome to COLIFE! COLIFE, a high-ranking company all over in Malaysia, sells a variety of clothes to customers. A website under the company, COLIFE is designed for convenience to customers shop online. Just needing an electronic device then customers could purchase the favourite outfits at anytime and anywhere by clicking our website, COLIFE.
                    We believe that your first expression in front of others is important. Hence, lots of beautiful and comfortable clothes could be purchased through the website. Believe the quality of the clothes that are sold. Don’t worry about the price, it is affordable and reasonable. Men and ladies, follow and using our website immediately. We promise to keep innovating and evolving to meet your fashion needs. We are excited to be the part of your fashion journey. Thank you for choosing our website, COLIFE.</p>
            </div>
        </div>
    </div>
    <div class="aboutus">
        <div class="aboutus2">
            <h1>Group Member</h1>
        </div>
        <div class="aboutus3">
            <div class="box"><img src="../member_photo/CHIN_WEI_YANG.jpg" alt=""></div>
            <div class="box"><img src="../member_photo/LEE_ZHENG_WEI.jpg" alt=""></div>
            <div class="box"><img src="../member_photo/KENNETH_LIEW_KAI_LUN.jpg" alt=""></div>
        </div>
        <div class="aboutus4">
            <div class="box">
               <p>CHIN WEI YANG
                <br>
                Group Leader
                <br>
                MMU Student
               </p>
            </div>
            <div class="box">
                <p>LEE ZHENG WEI
                    <br>
                    Group Member
                    <br>
                    MMU Student
                   </p>
            </div>
            <div class="box">
                <p>KENNETH LIEW KAI LUN
                <br>
                Group Member
                <br>
                MMU Student
                </p>
            </div>
        </div>
    </div>
    <div class="vmo">
        <h1>our mission, vission and objective</h1>
        <ul class="addpading">
            <li><span class="heading">VISSION</span><br>
                Our vision is to become the first market leader of clothing in the world. Through the best customer service experience, we believe that our dream could be successfully achieved. The high quality of clothes is the main key for customers to rely on our fashionable and comfortable clothes. Via the communities spreading our clothes, at that time, everyone will wear our clothes around the world. COLIFE will become the most popular in the world. 
            </li>
            <li><span class="heading">MISSION</span><br>
                COLIFE has adopted a new mission statement, “Be The Top of The Clothing World”.By curating an exclusive collection of cutting-edge designs, impeccable craftmanship and sustainable practices, we aim to elevate our customers' style while minimizing our environmental footprint. Our mission is not just to be the top of the clothing world but also to set a new standard for excellence in fashion retailing. Through the combination of innovation, invention, high quality and new creative thoughts, we strive to inspire confidence, celebrate individuality and shape the future of fashion.  
            </li>
            <li><span class="heading">OBJECTIVE</span><br>
                <ul class="objective">
                    <li class="dot">
                    Provide fashionable clothes for customers.
                    <ul class="object">
                        <li class="square">Show the best of first impression in front of others</li>
                        <li class="square">Increase self-confidence the whole day</li>
                    </ul>
                    </li>

                    <li class="dot">
                    Establish a trusted and first choice clothing website for customers 
                    <ul class="object">
                        <li class="square">Provide the high quality of clothes to customers</li>
                        <li class="square">Provide the best customer's services to customers</li>
                    </ul>
                    </li>

                    <li class="dot">
                    Provide a convenient platform for customers to shop online 
                    <ul class="object">
                        <li class="square">Easy handling platform with variety of the design of clothes</li>
                        <li class="square">Provide detailed descriptions of clothes such as clearly graphics, size and price</li>
                    </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <br>
    </div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>