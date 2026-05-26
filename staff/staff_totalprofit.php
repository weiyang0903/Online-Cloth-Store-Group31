<?php
session_start();
$stid =  $_SESSION['staffid'];

include("../database.php");

$sql2 = "SELECT * FROM orderitem";
$result2 = mysqli_query($connect,$sql2);
$wy = 0;
while($price = mysqli_fetch_assoc($result2))
{
    $oneprice = $price['pay'];

    $wy = $wy + $oneprice;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTAL PROFIT - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(./staffpicturedesign/totalprofit.png);
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
   table,td
   {
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
   }
   td
   {
    width: 300px;
    height: 100px;
    text-align: center;
   }
   th
   {
    height: 100px;
    border: 1px solid black;
   }
   button
   {
        margin: 10px;
        background-color: rgb(91, 223, 91);
        color: white;
        height: 50px;
        width: 150px;
        border: none;
        border-radius: 10px;
   }
   .box2
   {
    background-color: #cacaca;
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
.solve
{
height: 200px;
width: 100%;
margin-top: 10px;
}
.price
{
    font-size: 25px;
    font-weight: 900;
}
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

        <table>
            <tr>
                <td colspan="3" class="heading">TOTAL PROFIT<img src="../icron/money-regular-24.png" alt=""></td>
            </tr>
            <tr>
                <th class="box2">Order ID</th>
                <th class="box2">Total Price (RM)</th>
                <th class="box2">Day</th>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM totalprofit";
            $result = mysqli_query($connect,$sql);
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $noprofit = $find["noprofit"];
                    $total = $find["totalprice"];
                    $day = $find["day"];

                    echo '<tr>';
                    echo '<td>'."$noprofit".'</td>';
                    echo '<td>'."$total".'</td>';
                    echo '<td>'."$day".'</td>';
                    echo '</tr>';
                }
            }
            ?>
            <tr><td colspan="4"><span class="price">TOTAL PROFIT:  <?php echo "RM$wy"?></span></td></tr>
            </tr>
                <td colspan="4"><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table>
        <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>