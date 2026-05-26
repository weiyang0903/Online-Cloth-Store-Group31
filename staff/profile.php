<?php
session_start();
$id =  $_SESSION['staffid'];

include("../database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="png">
    <link rel="stylesheet" href="./navigation.css">
    <link rel="stylesheet" href="./popup.css">
    <link rel="stylesheet" href="./profile.css">
    <style>
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
    background-image: url(../cus_page/cuspic/p_picture2.jpg);
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
        $sql = "SELECT * FROM staff where St_ID = '$id'";
        $result = mysqli_query($connect,$sql);
        
        if(mysqli_num_rows($result) == 1)
        {
            $getvalue = mysqli_fetch_assoc($result);
        
            $name = $getvalue['St_Name'];
            $password = $getvalue['St_password'];
            $phonenumber = $getvalue['St_phonenumber'];
            $email = $getvalue['St_email'];

            echo '<div class="customer_data">';
            echo '<div class="customer_id">';
            echo '<b>STAFF ID :</b> '.$id.'';
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
        }else
        {
            echo"$sql";
        }
        ?>
        <div class="picture">
        <img src="./staffpicturedesign/staff.jpg" alt="">
        </div>
        <button type="button" class="edit">EDIT</button>
    </div>
    <div id="add1" class="add2">
    <div class="add3">
    <div class="pic" id="porimage"><img src="./staffpicturedesign/staff.jpg" alt="">
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

        <button type="submit" class="send" name="edit">SAVE CHANGE</button>    
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
                                                                         //空行和没有空行会有不一样的东西 (空格的话会让他以为你要放空白进去) (没空的话就会把你之前写的东西删除)
    closepopup.addEventListener("click",function() {popup.style.display = "none";});

    
</script>
<?php
    if(isset($_POST["edit"]))
    {
        $name = $_POST["cs"];
        $password = $_POST["cp"];
        $phonenumber = $_POST["pn"];
        $email = $_POST["ce"];

        mysqli_query($connect,"update staff set St_Name ='$name', St_password='$password', St_phonenumber='$phonenumber', St_email='$email' where St_ID=$id");

        ?>
            <script type="text/javascript">
            alert("<?php echo "Mr/Miss $name your profile is update complete"?>");
            window.location.href='./profile.php';
    </script>
    <?php
    }

?>