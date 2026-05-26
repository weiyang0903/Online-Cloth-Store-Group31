<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <style>
        body {
        background-image: url(../photo/background.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }
    .background
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: inherit;
        filter: blur(5px);
        z-index: -1;
    }
    .from
    {
        background-color: white;
        width: 800px;
        height: 560px;
        margin-top: 50px;
        position: relative;
        display: flex;
        box-shadow: 0 0 20px;
    }
    .picture
    {
        height: 560px;
        width: 300px;
        background-image: url(../logo/COLIFE.png);
    }
    .signin
    {
        height: 560px;
        width: 500px;
        background-color: #f8f8f8;
        position:absolute;
        left: 300px;
        display: flex;
        justify-content: center;
    }
    .signin form
    {
        margin-top: 60px;
    }
    form input
    {
        width: 300px;
        margin: 10px 0;
        padding: 20px;
        font-size: 16px;
        border-radius: 10px;

    }
    .button
    {
        position: relative;
        margin-top: 420px;
        z-index: 1000;
    }
    button
    {
        color: white;
        width: 70px;
        height: 35px;
        background-color: rgb(91, 223, 91);
        border-radius: 5px;
        border: none;
        font-size: 15px;
        margin-top: 20px;
    }
    .register
    {
        position: relative;
        margin-top: 425px;
        z-index: 1000;
        font-weight: 800;
        text-decoration: none;
        margin-left: 165px;
        top: 60px;
        color: black;
    }
    .logo
    {
        position: fixed;
    }
    form input:hover
    {
        box-shadow: 0 0 10px black;
    }
    .register:hover
    {
        color: blue;
    }
    .copywrite
    {
        position: absolute;
        bottom: 1px;
        right: 9px;
    }
    span
    {
        color: red;
    }
    </style>
</head>    
<body>
<script type="text/javascript">
    function backtoori()
    {
        document.getElementById("error_number").innerHTML = " ";
        document.getElementById("error_length").innerHTML = " ";
        
    }
    function check()
    {
        var ph,password;
        ph = document.customer_register.Cus_phonenumber.value;
        password = document.customer_register.Cus_password.value;

        if(ph.length < 10 || ph.length > 11)
        {
            document.getElementById("error_number").innerHTML = "**Sorry phone number must have 10 number only" ;
            event.preventDefault();
        }else
        {
            document.getElementById("error_number").innerHTML = " ";
        }
        if(password.length < 8)
        {
            document.getElementById("error_length").innerHTML = "**Sorry password must have at least 8 number" ;
            event.preventDefault();
        }else
        {
            document.getElementById("error_length").innerHTML = " ";
        }
    }
</script>
    <div class="background"></div>
    <div class="from">
        <div class="picture"></div>
        <div class="signin">
            <img class="logo" style="margin-top: 83px; margin-right: 320px;" src="../icron/user-solid-24.png" alt="">
            <img class="logo" style="margin-top: 165px; margin-right: 320px;" src="../icron/lock-alt-solid-24.png" alt="">
            <img class="logo" style="margin-top: 247px; margin-right: 320px;" src="../icron/phone-solid-24.png" alt="">
            <img class="logo" style="margin-top: 329px; margin-right: 320px;" src="../icron/envelope-solid-24.png" alt="">
            <h1 style="margin-left: 20px;">Register</h1>
            <form method="post" name="customer_register">
                <input type="text" name="Cus_Name" placeholder="USERNAME" required>
                <br>
                <input type="password" name="Cus_password" placeholder="PASSWORD" required>
                <br>
                <span id="error_length"></span>
                <input type="tel" name="Cus_phonenumber" placeholder="PHONE NUMBER" required>
                <br>
                <span id="error_number"></span>
                <input type="email" name="Cus_email" placeholder="E-MAIL" required>    
                    <button type="reset" onclick="backtoori();">CLEAR</button>
                    <button style="margin-left: 200px;" type="submit" name="savebtn" onclick="check();">Register</button>
            </form>
        </div>
        <a class="register" href="./login_user.php">Have account? Click here to LOGIN</a>
        <div class="copywrite">
            <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
        </div>
    </div>
</body>
</html>
<?php
include("../database.php");

if (isset($_POST["savebtn"])) {
    $cusname = $_POST["Cus_Name"];      
    $cuspassword = $_POST["Cus_password"];      
    $cusphonenumber = $_POST["Cus_phonenumber"];      
    $cusemail = $_POST["Cus_email"];      
    
    $sql = "SELECT * FROM customer WHERE Cus_email='$cusemail'";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result))
    {

        die("<script>alert('Sorry $cusname ONE EMAIL ONLIY CAN REGISTER ONE ACCOUNT');
        window.history.back();</script>");
    } else 

if(strlen($cusphonenumber) == 10 || strlen($cusphonenumber) == 11 && strlen($cuspassword) >= 8)
{
    mysqli_query($connect,"insert into customer (Cus_Name, Cus_password, Cus_phonenumber, Cus_email) values ('$cusname', '$cuspassword','$cusphonenumber','$cusemail')");
    ?>
            <script type="text/javascript">
            alert("<?php echo "Welcome $cusname your register is complete" ?>");
            window.location.href='./login_user.php';
    </script>
    <?php
    }else
    {
        die("<script>alert('Sorry $cusname');
        window.history.back();</script>");
    }
}

?>
