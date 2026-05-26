<?php
session_start();
$stid = $_SESSION['staffid'];

include("../database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER LIST - COLIFE</title>
    <link rel="icon" href="../Images/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(../photo/aboutus_picture.png);
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
    border: 1px solid black;
    background-color: pink;
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
   a
   {
    text-decoration: none;
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
    background-image: url(./staffpicturedesign/USERs.jpg);
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
    width: 220px;
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
.edit2
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
.edit3
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
.close2
{
    color: grey;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}
.close2:hover
{
    color: black;
}
.edit3 .pic
{
    height: 500px;
    width: 350px;
    background-image: url(./staffpicturedesign/USERs.jpg);
    border-radius: 5px;
    position: absolute;
}
.editdata
{
    height: 480px;
    width: 630px;
    padding: 10px;
    position: absolute;
    background-image: url(./staffpicturedesign/formdesign.jpg);
    margin-left: 350px;
    text-align: left;
    
}
.editdata input
{
    margin-bottom: 20px;
    border-radius: 5px;
    height: 30px;
    width: 220px;
}
.addproduct label
{
    margin-right: 10px;
}
.editdata label
{
    text-transform: uppercase;
    font-size: 25px;
    font-weight: 800;
}
.editdata button
{
    height: 30px;
    width: 100px;
}
.editdata .back2
{
    background-color: rgb(233, 67, 89);
    margin-top: 10px;
}
.editdata .back2:hover
{
    background-color: rgb(227, 0, 30);
}
.editdata .send2
{
    float: right;
    margin-top: 10px;
}
.editdata input:hover, .editdata textarea:hover
{
    box-shadow: 0 0 5px;
}
.printla
{
    display: flex;
    justify-content: left;
    float: right;
    margin-right: 10px;
    margin-top: 20px;
}
.solve
   {
    height: 200px;
    width: 100%;
    margin-top: 10px;
   }
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

        <table>
            <tr>
                <td colspan="7" class="heading">MEMBER LIST<img src="../icron/user-solid-24.png" alt=""></td>
            </tr>
            <tr>
                <th class="box2">No</th>
                <th class="box2">Customer ID</th>
                <th class="box2">Customer Name</th>
                <th class="box2">Phone number</th>
                <th class="box2">Email</th>
                <th class="box2">Password</th>
                <th class="box2">Action</th>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($connect, $sql);
            $nocus = 1;
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $id = $find['Cus_ID'];
                    $name = $find['Cus_Name'];
                    $password = $find['Cus_password'];
                    $phonenumber = $find['Cus_phonenumber'];
                    $email = $find['Cus_email'];

                    echo '<tr>';
                    echo '<td>'."$nocus".'</td>';
                    echo '<td class="test">'."$id".'</td>';
                    echo '<td class="namecus">'."$name".'</td>';
                    echo '<td class="number"><a href="tel:+6'.$phonenumber.'">'."$phonenumber".'</a></td>';
                    echo '<td class="mail"><a href="mailto:'.$email.'">'."$email".'</a></td>';
                    echo '<td class="pass">'."$password".'</td>';
                    echo '<td class="box2"><img class="eddata" src="../icron/pencil-regular-24.png" alt="MODIFY"><img class="eddata" src="../icron/trash-regular-24.png" alt="BIN"></td>';

                    echo '</tr>';
                    $nocus++;
                }
            }else
            {
                echo '<td colspan="7">SORRY DID NOT HAVE ANY MEMBER</td>';
            }
            ?>
            <tr>
                <td colspan="7"><button class="addmember" type="button" name="addstaff">ADD MEMBER</button><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table><br>
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
            <div class="heading" style="text-align: center; margin-bottom: 20px;">ADD MEMBER</div>
            <form method="post">

            <label for="customername">Customer Name: </label>
            <input name="sn" id="customername" type="text" placeholder="ENTER THE CUSTOMER NAME" required><br><br>
            
            <label for="password">Password: </label>
            <input name="ps" id="password" type="text" autocomplete="off" placeholder="ENTER THE PASSWORD" required><br><br>
            
            <label for="phonenumber">PHONE NUMBER: </label>
            <input name="pn" id="phonenumber" type="text" placeholder="ENTER THE PHONE NUMBER" required><br><br>
            
            <label for="email">E-mail: </label>
            <input name="es" id="email" type="email" placeholder="ENTER THE EMAIL" required><br><br>

            
            
            <button type="button" class="back">BACK</button>
            <button type="reset" class="clear">CLEAR</button>
            <button type="submit" class="send" name="send">ADD</button>    
        </form>
        </div>
    </div>
    </div>


    <div id="edit1" class="edit2">
    <div class="edit3">
        <div class="pic">
            
            </div>
            <div class="editdata">
            <span class="close2">&times;</span>
            <div class="heading" style="text-align: center; margin-bottom: 20px;">EDIT MEMBER</div>
            <form method="post">

            <label for="customerID">Customer ID: </label>
            <input name="idcus" id="customerID" type="text" required readonly><br><br>

            <label for="ecustomername">Customer Name: </label>
            <input name="rsn" id="ecustomername" type="text" placeholder="ENTER THE CUSTOMER NAME" required><br><br>
            
            <label for="epassword">Password: </label>
            <input name="rps" id="epassword" type="text" autocomplete="off" required><br><br>
            
            <label for="ephonenumber">PHONE NUMBER: </label>
            <input name="rpn" id="ephonenumber" type="text" placeholder="ENTER THE PHONE NUMBER" required><br><br>
            
            <label for="eemail">E-mail: </label>
            <input name="res" id="eemail" type="email" placeholder="ENTER THE EMAIL" required><br><br>

            <button type="button" class="back2">BACK</button>
            <button type="submit" class="clear2" name="del">DELETE</button>
            <button type="submit" class="send2" name="rsend">UPDATE</button>    
        </form>
        </div>
    </div>
    </div>
</body>
</html>
<script type="text/javascript">

var open = document.querySelector(".addmember");
    var popup = document.getElementById("add1");
    var closepopup = document.querySelector(".close");
    var closepopup2 = document.querySelector(".back");

    open.addEventListener("click",function() {popup.style.display = "block";});
    closepopup.addEventListener("click",function() {popup.style.display = "none"; });
    closepopup2.addEventListener("click",function() {popup.style.display = "none"; });


    var open2 = document.querySelectorAll(".eddata");
    open2.forEach(function(button) {
        button.addEventListener("click", function() {
            var popup2 = document.getElementById("edit1");
            popup2.style.display = "block";
            var card = this.closest('tr');
            var cusid = card.querySelector('.test').textContent;
            var name = card.querySelector('.namecus').textContent;
            var pn = card.querySelector('.number a').textContent;
            var mailc = card.querySelector('.mail a').textContent;
            var pass = card.querySelector('.pass').textContent;

            var id = document.getElementById("customerID");
            var cusname = document.getElementById("ecustomername");
            var cuspassword = document.getElementById("epassword");
            var phonenumber = document.getElementById("ephonenumber");
            var email = document.getElementById("eemail");

            id.value = cusid;
            cusname.value = name;
            cuspassword.value = pass;
            phonenumber.value = pn;
            email.value = mailc;
        });
    });

    var closepopup2 = document.querySelector(".close2");
    var closepopup3 = document.querySelector(".back2");

    closepopup2.addEventListener("click", function() {
        var popup2 = document.getElementById("edit1");
        popup2.style.display = "none";
    });

    closepopup3.addEventListener("click", function() {
        var popup2 = document.getElementById("edit1");
        popup2.style.display = "none";
    });
</script>
<?php
if (isset($_POST["send"]))
{
    
    $name = $_POST["sn"];
    $password = $_POST["ps"];
    $phonenumber = $_POST["pn"];
    $email = $_POST["es"];
    

    $sql = "INSERT INTO customer (Cus_Name, Cus_password, Cus_phonenumber, Cus_email) values ('$name', '$password', '$phonenumber', '$email')";
    mysqli_query($connect,$sql);
    ?>
    <script type="text/javascript">
    alert("<?php echo "SUCCESSFUL ADD $name" ?>");
    window.location.href='./staff_member.php';
    </script>
    <?php

}

if (isset($_POST['del']))
    {
        $idtodelete = $_POST['idcus'];

        $sql2 = "DELETE FROM cart WHERE Cus_ID='$idtodelete'";
        $sql3 = "DELETE FROM rate WHERE Cus_ID='$idtodelete'";
        $sql4 = "DELETE FROM contactus WHERE Cus_ID='$idtodelete'";
        $sql5 = "DELETE FROM orderitem WHERE Cus_ID='$idtodelete'";
        $sql6 = "DELETE FROM ordertable WHERE Cus_ID='$idtodelete'";
        $sql = "DELETE FROM customer WHERE Cus_ID='$idtodelete'";
        mysqli_query($connect,$sql2);
        mysqli_query($connect,$sql3);
        mysqli_query($connect,$sql4);
        mysqli_query($connect,$sql5);
        mysqli_query($connect,$sql6);
        mysqli_query($connect,$sql);

        ?>
            <script type="text/javascript">
            alert("<?php echo "$sql"?>");
            window.location.href='./staff_member.php';
    </script>
    <?php
    }

    if(isset($_POST["rsend"]))
    {
        $id = $_POST["idcus"];
        $name = $_POST["rsn"];
        $password = $_POST["rps"];
        $phonenumber = $_POST["rpn"];
        $email = $_POST["res"];

        mysqli_query($connect,"update customer set Cus_Name ='$name', Cus_password='$password', Cus_phonenumber='$phonenumber', Cus_email='$email' where Cus_ID='$id' ");

        ?>
            <script type="text/javascript">
            alert("<?php echo "Mr/Miss $name profile is update complete"?>");
            window.location.href='./staff_member.php';
    </script>
    <?php
    }
?>