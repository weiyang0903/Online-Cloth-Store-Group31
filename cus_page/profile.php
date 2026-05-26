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
    <title>PROFILE - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigatiom.css">
    <style>
    body {
    background-image: url(../photo/background.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    }
   .box1
   {
    margin: 0 auto;
    margin-top: 110px;
    height: 600px;
    width: 1400px;
    background-color: white;
    position: relative;
    box-shadow: 0 0 5px;
    border-radius: 10px;
    background-image: url(./cuspic/p_picture.jpg);
   }
   .box1 h1
   {
    text-align: center;
   }
   .box1 .customer_data
   {
    margin-left: 450px;
   }
   .box1 .customer_data div
   {
    margin-bottom: 30px;
    font-size: 30px;
   }
   .picture
   {
    height: 500px;
    width: 350px;
    background-color: aqua;
    position: absolute;
    top: 40px;
    left: 40px;
   }
   .edit
   {
    width: 100px;
    height: 50px;
    margin: 20px;
    position: absolute;
    border: none;
    color: white;
    font-size: 20px;
    border-radius: 10px;
    right: 0;
    bottom: 0;
    cursor: pointer;
    background-color: rgb(91, 223, 91);
   }
   .edit:hover
    {
        background-color: rgb(0, 219, 0);
    }
    .edit1
   {
    width: 200px;
    height: 50px;
    margin: 20px;
    position: absolute;
    border: none;
    color: white;
    font-size: 20px;
    border-radius: 10px;
    right: 110px;
    bottom: 0;
    cursor: pointer;
    background-color: rgb(91, 223, 91);
   }
   .edit1:hover
    {
        background-color: rgb(0, 219, 0);
    }
    .add2
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
.add3
{
    background-color: white;
    border-radius: 10px;
    margin: 4% auto;
    padding: 20px;
    border: 1px solid grey;
    width: 1000px;
    height: 500px;
    text-align: center;
    position: relative;
    background-image: url(./cuspic/p_picture2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
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
.pic
{
    height: 500px;
    width: 350px;
    border-radius: 10px;
    position: absolute;
    box-shadow: 0 0 0.5px;
}
.addproduct
{
    height: 480px;
    width: 630px;
    padding: 10px;
    position: absolute;
    margin-left: 350px;
    text-align: left;
    
}
.addproduct input
{
    margin-bottom: 30px;
    border-radius: 5px;
    height: 25px;
    width: 200px;
}
.addproduct label
{
    margin-right: 10px;
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 800;
}
.addproduct textarea
{
    resize: none;
    height: 80px;
    width: 600px;
}
.addproduct label
{
    text-transform: uppercase;
}
.addproduct button
{
    height: 30px;
    width: 200px;
}
.addproduct .send
{
    float: right;
}
.addproduct input:hover, .addproduct textarea:hover
{
    box-shadow: 0 0 5px;
}
.heading
{
height: 60px;
font-size: 40px;
font-weight: 800;
}
.send
{
    height: 10px;
    width: 100px;
}
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>
    <div class="box1">
        <br>
        <h1 style="text-transform: uppercase; font-size: 50px;">Profile</h1><br>
        <?php
        $sql = "SELECT * FROM customer where Cus_ID = $id";
        $result = mysqli_query($connect,$sql);
        
        if(mysqli_num_rows($result) == 1)
        {
            $getvalue = mysqli_fetch_assoc($result);
        
            $name = $getvalue['Cus_Name'];
            $password = $getvalue['Cus_password'];
            $phonenumber = $getvalue['Cus_phonenumber'];
            $email = $getvalue['Cus_email'];

            echo '<div class="customer_data">';
            echo '<div class="customer_id">';
            echo '<b>CUSTOMER ID :</b> '.$id.'';
            echo  '</div>';
            echo '<div class="name">
                <b>Name :</b> '.$name.'
            </div>
            <div class="phone_number">
                <b>PHONE NUMBER :</b> '.$phonenumber.'
            </div>
            <div class="email">
                <b>E-MAIL :</b> '.$email.'
            </div>
            <div class="Password">
                <b>PASSWORD :</b> '.$password.'
            </div>
            </div>';
        }
        ?>
        <div class="picture">
        <img src="./cuspic/USER.jpg" alt="">
        </div>
        <button type="button" class="edit1" onclick="history()">PAYMENT HISTORY</button>
        <button type="button" class="edit">EDIT</button>
    </div>
    <div id="add1" class="add2">
    <div class="add3">
    <div class="pic" id="porimage"><img src="./cuspic/USER.jpg" alt="">
        </div>
        <div class="addproduct">
        <span class="close">&times;</span>
        <div class="heading" style="text-align: center; margin-bottom: 10px;">EDIT PROFILE</div>
        <form method="post">

        <label for="customername">Name: </label>
        <input name="cs" id="customername" type="text" value="<?php echo "$name" ?>" required><br>
        
        <label for="customerpassword">PASSWORD: </label>
        <input name="cp" id="customerpassword" type="text" value="<?php echo "$password" ?>" required><br>
        
        <label for="phonenumber">PHONE NUMBER: </label>
        <input name="pn" id="phonenumber" type="text" value="<?php echo "$phonenumber" ?>" required><br>
        
        <label for="customeremail">E-MAIL:</label>
        <input name="ce" id="customeremail" type="email" value="<?php echo "$email" ?>" required>

        <button type="submit" class="edit" name="edit">SAVE CHANGE</button>    
    </form>
    </div>
    </div>
</body>
</html>
<script type="text/javascript">
    var mesbutton = document.querySelector(".edit");
    var popup = document.getElementById("add1");
    var closepopup = document.querySelector(".close");

    mesbutton.addEventListener("click",function() {popup.style.display = "block";});
    closepopup.addEventListener("click",function() {popup.style.display = "none";});
    
    function history()
    {
        window.location.href='./history.php';
    }
    
</script>
<?php
    if(isset($_POST["edit"]))
    {
        $name = $_POST["cs"];
        $password = $_POST["cp"];
        $phonenumber = $_POST["pn"];
        $email = $_POST["ce"];

        mysqli_query($connect,"update customer set Cus_Name ='$name', Cus_password='$password', Cus_phonenumber='$phonenumber', Cus_email='$email' where Cus_ID=$id");

        ?>
            <script type="text/javascript">
            alert("<?php echo "Mr/Miss $name your profile is update complete"?>");
            window.location.href='./profile.php';
    </script>
    <?php
    }

?>