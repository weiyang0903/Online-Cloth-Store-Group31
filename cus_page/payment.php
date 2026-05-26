<?php
session_start();
$id =  $_SESSION['name'];

include("../database.php");

$totolpayment = $_SESSION['price'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./payment.css">
    <style>
        .backtohome
        {
            position: absolute;
            height: 35px;
            width: 130px;
            text-align: center;
            background-color: rgb(231, 67, 89);
            padding: 7px;
            border-radius: 5px;
            text-decoration: none;
            left: 40px;
            bottom: 40px;
            color: white;
            font-weight: 500;
        }
        .colum .input-box input:hover
        {
            box-shadow: 0 0 5px;
        }
        .button .backtohome:hover
        {
            background-color: rgb(227, 0, 30);
        }
        button:hover
        {
            background-color: rgb(0, 219, 0);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="payment">
        <form method="post">
            <div class="row">
                <div class="colum">
                    <h3 class="title">BILLING ADDRESS</h3>
                    <div class="input-box">
                        <span>FULL NAME</span>
                        <input type="text" class="text" placeholder="WEI YANG" name="name" required>
                    </div>
                    <div class="input-box">
                        <span>ADDRESS</span>
                        <input type="text" class="text" placeholder="NO 298.." name="address" required>
                    </div>
                    <div class="input-box">
                        <span>PHONE NUMBER</span>
                        <input type="tel" class="text" placeholder="XXX-XXXXXXX" name="tel" required>
                    </div>
                </div>

                <div class="colum">
                    <h3 class="title">PAYMENT</h3>
                    <div class="input-box">
                        <span>CARD NUMBER</span>
                        <input type="text" class="text2"  placeholder="XXX-XXX-XXX" name="cardnum">
                    </div>
                    <div class="input-box">
                        <span>NAME ON CARD</span>
                        <input type="text" class="text2"  placeholder="CHIN WEI YANG" name="cname">
                    </div>
                    <div class="input-box">
                        <span>CODE</span>
                        <input type="password" class="text2"  placeholder="XXX" name="code">
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit" class="button" name="savebtn" onclick="check();">SUBMIT</button>
                <button type="reset" class="clear">CLEAR</button>
                <a href="./cart.php" class="backtohome">BACK TO CART</a>
                </form>
            </div>
</body>
</html>
<?php

if (isset($_POST["savebtn"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $cardnum = $_POST["cardnum"];
    $cname = $_POST["cname"];
    $code = $_POST["code"];

    if(strlen($cardnum) == 9 && strlen($code) == 3) {
        $result = mysqli_query($connect, "SELECT * FROM ordertable");
        $result7 = mysqli_query($connect, "SELECT * FROM totalprofit");
        $count = mysqli_num_rows($result);
        $count2 = mysqli_num_rows($result7);
        $count++;
        $count2++;
        $result2 = mysqli_query($connect, "INSERT INTO ordertable (orderid, Cus_ID, address, total_amount) VALUES ('$count', '$id', '$address', '$totolpayment')");
        $result8 = mysqli_query($connect, "INSERT INTO totalprofit (noprofit, totalprice) VALUES ('$count2', '$totolpayment')");
        $result3 = mysqli_query($connect, "SELECT * FROM cart WHERE Cus_ID = '$id'");

        while($findcategory = mysqli_fetch_assoc($result3)) {
            $categoryidc = $findcategory['categoryid'];
            $productidc = $findcategory['productid'];
            $sizeidc = $findcategory['sizeid'];
            $qunc = $findcategory['cartquan'];

            $result4 = mysqli_query($connect, "SELECT * FROM product WHERE productid = '$productidc' AND sizeid = '$sizeidc'");
            $find = mysqli_fetch_assoc($result4);

            $pricep = $find['productprice'];

            $eachprice = $pricep * $qunc;

            $pay = $pricep * $qunc;
            $result5 = mysqli_query($connect, "INSERT INTO orderitem (orderid, productid, sizeid, quantity, productprice, pay, Cus_ID) VALUES ('$count', '$productidc', '$sizeidc', '$qunc', '$pricep', '$eachprice', '$id')");
            $result6 = mysqli_query($connect, "DELETE FROM cart WHERE Cus_ID='$id'");
        }
        ?>
        <script type="text/javascript">
        alert("<?php echo "YOUR ORDER HAVE BEEN PLACE"?>");
        window.location.href='./cart.php';
        </script>
        <?php
    }

    if(strlen($cardnum) != 9)
    {
        ?>
        <script type="text/javascript">
        alert("<?php echo "SORRY DID NOT MATCH YOUR CARD PLEASE ENTER VALID NINE DIGIT NUMBER" ?>");
        window.location.href='./payment.php';
    </script>
    <?php
    }
    if(strlen($code) != 3)
    {
        ?>
        <script type="text/javascript">
        alert("<?php echo "SORRY DID NOT MATCH YOUR CARD PLEASE ENTER VALID CODE"?>");
        window.location.href='./payment.php';
    </script>
    <?php
    }
}
?>