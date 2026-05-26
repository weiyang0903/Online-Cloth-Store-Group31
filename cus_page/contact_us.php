<?php
session_start();
$id =  $_SESSION['name'];

include("../database.php");

if(isset($_POST["send"]))
{  
    $message = $_POST['message'];
    if(strlen($message) > 0)
    {
        mysqli_query($connect,"insert into contactus (Cus_ID, message) value ('$id', '$message')");

        ?>
            <script type="text/javascript">
                alert("<?php echo "SUCCESSFUL SUBMIT" ?>");
                window.location.href='./contact_us.php';
            </script>
            <?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigatiom.css">
    <link rel="stylesheet" href="./contact_us.css">
    <style>
   .copyright {
    background-color: #333;
    color: white;
    text-align: center;
    font-size: 15px;
    width: 100%;
    position: fixed;
    bottom: 0;
}
.mes1
{
    display: none;
    float: left;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
}
.mes3
{
    background-color: white;
    border-radius: 10px;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid grey;
    width: 400px;
    text-align: center;
}
.close
{
    color: grey;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}
.close:hover
{
    color: black;
}
button
{
    width: 100px;
    height: 50px;
}
textarea
{
    resize: none;
    width: 300px;
    height: 100px;
}
.leavemessage
{
    position: absolute;
    bottom: 30px;
    right: 10px;
}
.mes3 .title
{
    height: 10px;
    padding: 10px;
    margin-bottom: 10px;
}
.mes3 .title span
{
    font-weight: 900;
    font-size: 20px;
}
.mes3 .text textarea:hover
{
    box-shadow: 0 0 1px black;
}
.leavemessage button
{
    cursor: pointer;
    height: 30px;
    width: 100px;
    background-color: rgb(91, 223, 91);
    border: none;
    border-radius: 5px;
    color: white;
}
.mes1 button
{
    border: none;
    background-color: rgb(91, 223, 91);
    height: 30px;
    width: 80px;
    border-radius: 5px;
    margin-top: 10px;
    color: white;
}
.leavemessage button:hover,form button:hover
{
    background-color: rgb(0, 219, 0);
}
#missing
{
    color: red;
}
.pic
{
    height: 120px;
    width: 120px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 10px;
}
.solve
{
height: 220px;
width: 100%;
margin-top: 10px;
}
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

    <div class="location">
        <div class="location2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.7436995704697!2d102.27353867472688!3d2.249493497730707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e56b9710cf4b%3A0x66b6b12b75469278!2sMultimedia%20University!5e0!3m2!1sen!2smy!4v1718050037360!5m2!1sen!2smy" width="700px" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location3">
            <h1>CONTACT US</h1>
        <div class="location4">
            You can contact us for futher information
            <br><br>
           <span> Headquarters</span><br>
           <a href="https://maps.app.goo.gl/cd35CEbKScH1t2TRA" target="_blank">
               Jalan Ayer Keroh Lama, 75450 Bukit Beruang, Melaka
           </a>
        </div>
        <div class="box">
            <ul>
                <li style="list-style: none;"><span class="heading">PHONE NUMBER</span></li>
                <li>CHIN WEI YANG - <a href="tel:+60176265223">0176265223</a></li>
                <li>LEE ZHENG WEI - <a href="tel:+60182291312">0182291312</a></li>
                <li>KENNETH LIEW KAI LUN - <a href="tel:+60149403937">0149403937</a></li>
            </ul>

            <ul>
                <li style="list-style: none;"><span class="heading">E-MAIL</span></li>
                <li style="list-style: none;"><a href="mailto:1221206249@student.mmu.edu.my">colifefashion@gmail.com</a></li>

            </ul>
        </div>
        <div class="box2">
            <span class="socialmedia">OUR SOCIAL MEDIA</span>
            
            <div class="box4" style="display: flex;">
                <div class="box3">
                   <a href="https://www.facebook.com/profile.php?id=61561831539770&mibextid=ZbWKwL" target="_blank"><img src="../icron/facebook-square-logo-24.png" alt="facebook"></a>
                </div>
                <div class="box3">
                    <a href="https://www.instagram.com/colife05?igsh=MWg1bjQ1Z3hqanlwcQ==" target="_blank"><img src="../icron/instagram-logo-24.png" alt="instagram"></a> 
                </div>
                <div class="box3">
                    <a href="https://x.com/WeiYang1811?t=cr6wwqkkW--vhgZT0dllEQ&s=09" target="_blank"><img src="../icron/twitter-logo-24.png" alt="instagram"></a> 
                </div>
            </div>
        </div>
        <div class="leavemessage">
            <button class="message">Message</button>
        </div>
        </div>
    </div>
</div>
<div id="mes" class="mes1">
    <div class="mes3">
        <span class="close">&times;</span>
        <div class="pic">
            <label for="mescus">
                <img src="../logo/120x120.jpg" alt="COLIFE LOGO" width="120px" height="120px" style="box-shadow: 0 0 1px black; border-radius: 10px;">
            </label>
        </div>
        <div class="title">
            <span>COLIFE</span>
        </div>
        <div class="text">
            <form name="wei" method="post">
            <textarea cols="20" name="message" id="mescus" placeholder="leave your message here"></textarea><br>
            <span id="missing"></span><br>
            <button type="submit" name="send" onclick="missingword();">SEND</button>
        </form>
        </div>
    </div>
</div>
<div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>
<script type="text/javascript">
    var mesbutton = document.querySelector(".message");
    var popup = document.getElementById("mes");
    var closepopup = document.querySelector(".close");

    mesbutton.addEventListener("click",function() {popup.style.display = "block";});
                    
    closepopup.addEventListener("click",function() {popup.style.display = "none"; document.getElementById("missing").innerHTML = " ";document.wei.message.value = "";});

    function missingword()
    {
        var messagecustomer;
        messagecustomer = document.wei.message.value;

        if(messagecustomer.length == 0)
        {
            document.getElementById("missing").innerHTML = "**YOU MUST WRITE SOMETHING**";
            event.preventDefault();
        }
    }
</script>