<?php
session_start();
$stid =  $_SESSION['staffid'];

include("../database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF LIST - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(./staffpicturedesign/background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
    table
   {
    background-color: rgba(255, 255, 255, 0.9);
    margin: 0 auto;
    position: relative;
    width: 90%;
    padding: 10px;
    top: 110px;
   }
   .heading
   {
    height: 60px;
    font-size: 50px;
    font-weight: 800;
   }
   .heading img
   {
    height: 40px;
   }
   th
   {
    height: 100px;
    border: 1px solid;
    background-color: lightyellow;
   }
   table,td
   {
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
   }
   td
   {
    height: 100px;
    width: 200px;
    text-align: center;
   }
   .box2
   {
    width: 200px;
    text-align: center;
   }
   button
   {
        margin: 10px;
        background-color: rgb(91, 223, 91);
        color: white;
        height: 50px;
        width: 100px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
   }
   button:hover
   {
    background-color: rgb(0, 219, 0);
   }
   .height
   {
    background-color: palegoldenrod;
    height: 50px;
   }
   table a
   {
    text-decoration: none;
   }
   .solve
   {
    height: 200px;
    width: 100%;
    margin-top: 10px;
   }
   .copyright {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 5px 0;
    position: fixed;
    bottom: 0px;
    width: 100%;
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
    background-image: url(./staffpicturedesign/staff.jpg);
    border-radius: 5px;
    position: absolute;
}
.addproduct
{
    height: 480px;
    width: 630px;
    padding: 10px;
    position: absolute;
    background-image: url(./staffpicturedesign/formdesign.jpg);
    margin-left: 350px;
    text-align: left;
    
}
.addproduct input
{
    margin-bottom: 20px;
    border-radius: 5px;
    height: 30px;
    width: 200px;
}
.addproduct label
{
    margin-right: 10px;
}
.addproduct label
{
    text-transform: uppercase;
    font-size: 25px;
    font-weight: 800;
}
.addproduct button
{
    height: 30px;
    width: 100px;
}
.addproduct .back
{
    background-color: rgb(233, 67, 89);
    margin-top: 80px;
}
.addproduct .back:hover
{
    background-color: rgb(227, 0, 30);
}
.addproduct .send
{
    float: right;
    margin-top: 80px;
}
.addproduct input:hover, .addproduct textarea:hover
{
    box-shadow: 0 0 5px;
}
#porimage img
{
    max-width: 100%;
    max-height: 100%;
}
.printla
{
    display: flex;
    justify-content: left;
    float: right;
    margin-right: 10px;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>
        <table>
            <tr>
                <td colspan="6" class="heading">STAFF LIST<img src="../icron/user-solid-24.png" alt=""></td>
            </tr>
            <tr class="height">
                <th class="box2" class="colour">No.</th>
                <th class="box2" class="colour">Staff ID</td>
                <th class="box2" class="colour">Staff Name</th>
                <th class="box2" class="colour">Phone number</th>
                <th class="box2" class="colour">Email</th>
                <th class="box2" class="colour">Action</th>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM staff";
            $result = mysqli_query($connect,$sql);
            $nostaff = 1;
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $id = $find['St_ID'];
                    $name = $find['St_Name'];
                    $phonenumber = $find['St_phonenumber'];
                    $email = $find['St_email'];

                    echo '<tr>';
                    echo '<td>'."$nostaff".'</td>';
                    echo '<td>'."$id".'</td>';
                    echo '<td>'."$name".'</td>';
                    echo '<td><a href="tel:+6'.$phonenumber.'">'."$phonenumber".'</td>';
                    echo '<td><a href="mailto:'.$email.'">'."$email".'</td>';
                    echo '<td class="box2"><img src="../icron/trash-regular-24.png" alt="BIN" onclick="deleteProduct(\'' . $id . '\');"></td>';
                    echo '</td>';
                    $nostaff++;
                }
            }
            
            ?>
            <tr>
                <td colspan="6"><button class="addstaff" type="button" name="addstaff">ADD STAFF</button><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table>
        <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
    <div id="add1" class="add2">
    <div class="add3">
        <div class="pic" id="porimage">
            
            </div>
            <div class="addproduct">
            <span class="close">&times;</span>
            <div class="heading" style="text-align: center; margin-bottom: 20px;">ADD STAFF</div>
            <form method="post">

            <label for="staffname">Staff Name: </label>
            <input name="sn" id="staffname" type="text" placeholder="ENTER THE STAFF NAME" required><br><br>
            
            <label for="password">Password: </label>
            <input name="ps" id="password" type="text" autocomplete="off" placeholder="ENTER THE PASSWORD" required><br><br>
            
            <label for="phonenumber">PHONE NUMBER: </label>
            <input name="pn" id="phonenumber" type="text" placeholder="ENTER THE PHONE NUMBER" required><br><br>
            
            <label for="email">E-mail: </label>
            <input name="es" id="email" type="email" placeholder="ENTER THE EMAIL" required><br><br>

            
            
            <button type="button" class="back">BACK</button>
            <button type="reset" class="clear">CLEAR</button>
            <button type="submit" class="send" name="send">UPDATE</button>    
        </form>
        </div>
    </div>
    </div>
</body>
</html>
<script type="text/javascript">
    var open = document.querySelector(".addstaff");
    var popup = document.getElementById("add1");
    var closepopup = document.querySelector(".close");
    var closepopup2 = document.querySelector(".back");

    open.addEventListener("click",function() {popup.style.display = "block";});
    closepopup.addEventListener("click",function() {popup.style.display = "none"; });
    closepopup2.addEventListener("click",function() {popup.style.display = "none"; });

    function deleteProduct(staffid)
    {
        if(confirm("DO YOU SURE WANT TO REMOVE THIS STAFF?"))
        {

            var xhr = new XMLHttpRequest();
            var url = "./staff_staff.php?del&si=" + staffid;
            xhr.open("GET", url, true);
            xhr.onload = function ()
            {
                if (xhr.status === 200)
                {
                    alert("Remove Successfully");
                    window.location.reload();
                }else
                {
                    alert("Remove Unsuccessful: " + xhr.statusText);
                }
            };
            xhr.onerror = function ()
            {
                alert("Request Error");
            };
            xhr.send();
        }
    }
</script>

<?php
if (isset($_POST["send"]))
{
    
    $name = $_POST["sn"];
    $password = $_POST["ps"];
    $phonenumber = $_POST["pn"];
    $email = $_POST["es"];
    

    $sql = "INSERT INTO staff (St_Name, St_password, St_phonenumber, St_email) values ('$name', '$password', '$phonenumber', '$email')";
    mysqli_query($connect,$sql);
    ?>
    <script type="text/javascript">
    alert("<?php echo "SUCCESSFUL ADD $name" ?>");
    window.location.href='./staff_staff.php';
    </script>
    <?php

};

if (isset($_GET['del']))
    {
        $idtodelete = $_GET['si'];

        $sql = "DELETE FROM staff WHERE St_ID='$idtodelete'";

        if (mysqli_query($connect,$sql))
        {
            echo "success";
        }
        exit;
    }
?>