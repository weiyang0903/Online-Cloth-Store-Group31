<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <style>
        body {
        background-image: url(../photo/background.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
    }
    .form
    {
        width: 800px;
        height: 680px;
        position: relative;
        margin: 0 auto;
        margin-top: 18px;
        box-shadow: 0 0 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 0 10px black;
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
    .form_background
    {
        display: flex;
        position: relative;
        margin: 0 auto;
    }
    .form img   
    {
        margin-bottom: 20px;
    }
    form {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
            position: relative;
        }
    form input
    {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        font-size: 16px;
        border-radius: 10px;
    }
    .button
    {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    button
    {
        color: white;
        width: 60px;
        height: 35px;
        background-color: rgb(91, 223, 91);
        border-radius: 5px;
        border: none;
        font-size: 15px;
        margin-top: 20px;
    }
    form input:hover
    {
        box-shadow: 0 0 3px black;
    }
    .backtohome
    {
        text-decoration: none;
        color: white;
        background-color: #f44336;
        padding: 1px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        margin-top: 20px;
    }
    .user
    {
        position: absolute;
        right: 1px;
        top: 35px;
    }
    .password
    {
        position: absolute;
        right: 1px;
        top: 114px;
    }
    .register a
    {
        text-decoration: none;
        color: black;
        font-weight: 800;
    }
    .register a:hover
    {
        color: blue;
    }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="form">
        <div class="form_background">
            
        </div>
        <img src="../logo/logo colife.jpeg" alt="" width="200px" height="200px">
        <div>
            <div style="text-align: center;"><h1>LOGIN IN TO COLIFE</h1>
            <p>Log in with your email and password</p>
            </div>
            <form method="post" name="userprofile">
                <label for="username">EMAIL ADDRESS</label>
                <img class="user" src="../icron/user-solid-24.png" alt="">
                <input type="text" name="Cus_email" id="username" placeholder="Email address" required>
                <label for="password">PASSWORD</label>
                <img class="password" src="../icron/lock-alt-solid-24.png" alt="">
                <input type="password" name="Cus_password" id="password" placeholder="Password" required>
                <!-- <a style="color: blue;" href="./forgot_password.html">Forgot Password?</a> -->
                <a href=""></a>
                <div class="button">
                    <a class="backtohome" href="./login_staff.php">LOGIN AS STAFF</a>
                    <button type="reset">CLEAR</button>
                    <button type="submit" name="welcome">LOGIN</button>
                </div>
            </form>
        </div>
        <div class="register">
            <p><a href="./signin.php">Did not have account Register Here ?</a></p>
        </div>
        <div class="copywrite" style="margin-bottom: 10px;">
            <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
        </div>
    </div>
    
</body>
</html>
<?php
include("../database.php");

if(isset($_POST["welcome"]))
{
   $cusemail = $_POST["Cus_email"];    
   $cuspassword = $_POST["Cus_password"];  

    $sql = "SELECT * FROM customer WHERE Cus_email='$cusemail' AND Cus_password='$cuspassword'";
    
    $check = mysqli_query($connect, $sql);

    if (mysqli_num_rows($check) == 1) {

        $findname = mysqli_fetch_assoc($check);
        $cusname = $findname['Cus_Name'];
        $cusid = $findname['Cus_ID'];
        $_SESSION['name'] = $cusid;
        ?>
  
        <script type="text/javascript">
      alert("<?php echo "WELCOME $cusname" ?>"); 
            window.location.href='../cus_page/homepage.php';
    </script>
  
    <?php
} else {

    die("<script>alert('Invalid email or password');
        window.history.back();</script>");
}
}
?>