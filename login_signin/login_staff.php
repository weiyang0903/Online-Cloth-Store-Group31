<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN STAFF - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="png">
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
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="form">
        <div class="form_background">
            
        </div>
        <img src="../logo/logo colife.jpeg" alt="" width="200px" height="200px">
        <div>
            <div style="text-align: center;"><h1>COLIFE STAFF</h1>
            <p>Log in with your email and password</p>
            </div>
            <form action="" method="post" name="userprofile">
                <label for="username">EMAIL ADDRESS</label>
                <img class="user" src="../icron/user-solid-24.png" alt="">
                <input type="text" name="St_email" id="username" placeholder="Email address" required>
                <label for="password">PASSWORD</label>
                <img class="password" src="../icron/lock-alt-solid-24.png" alt="">
                <input type="password" name="St_password" id="password" placeholder="Password" autocomplete="off" required>
                <a href=""></a>
                <div class="button">
                    <a style="margin-right: 70px;" class="backtohome" href="./login_user.php">BACK</a>
                    <button style="margin-right: 70px;" type="reset">CLEAR</button>
                    <button type="submit" name="stafflogin">LOGIN</button>
                </div>
            </form>
        </div>
        <br><br>
        <div class="copywrite" style="margin-bottom: 1px;">
            <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
        </div>
    </div>
    
</body>
</html>
<?php
include("../database.php");
if(isset($_POST["stafflogin"]))
{
    $stemail = $_POST["St_email"];
    $stpassword = $_POST["St_password"];

    $sql = "SELECT * FROM staff WHERE St_email='$stemail' AND St_password = '$stpassword'";
    $check = mysqli_query($connect,$sql);

    if(mysqli_num_rows($check))
    {
        $findname = mysqli_fetch_assoc($check);
        $stname = $findname['St_Name'];
        $stid = $findname['St_ID'];

        $_SESSION['staffid'] = $stid;

        ?>
        <script type="text/javascript">
            alert("<?php echo "WELCOME $stname" ?>");
            window.location.href='../staff/staff_staff.php';
        </script>
        <?php
    }else
    {
        die("<script>alert('Invalid email or password');window.histary.back();</script>");
    }
}

?>