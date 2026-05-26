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
    <title>STAFF ORDER - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(./staffpicturedesign/order.jpg);
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
    width: 200px;
    height: 100px;
    text-align: center;
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
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>
        <table>
            <tr>
                <td colspan="6" class="heading">ORDER LIST<img src="../icron/user-solid-24.png" alt=""></td>
            </tr>
            <tr>
                <td class="box2">Order ID</td>
                <td class="box2">Customer ID</td>
                <td class="box2">Address</td>
                <td class="box2">Day</td>
                <td class="box2">Total Amount</td>
                <th class="box2">Action</th>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM ordertable";
            $result = mysqli_query($connect,$sql);
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $orderid = $find["orderid"];
                    $id = $find["Cus_ID"];
                    $address = $find["address"];
                    $day = $find["day"];
                    $total = $find["total_amount"];

                    echo '<tr>';
                    echo '<td>'."$orderid".'</td>';
                    echo '<td>'."$id".'</td>';
                    echo '<td>'."$address".'</td>';
                    echo '<td>'."$day".'</td>';
                    echo '<td>'."$total".'</td>';
                    echo '<td><img src="../icron/trash-regular-24.png" alt="BIN" onclick="deleteProduct(\'' . $orderid . '\');"></td>';
                    echo '</tr>';
                }
            }else
            {
                echo '<td colspan="6">DID NOT HAVE ANY ORDER</td>';
            }
            ?>
            <tr>
                <td colspan="6"><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table>
        <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>
<script type="text/javascript">
    function deleteProduct(productnumber)
    {    console.log(productnumber)
        if(confirm("DO YOU SURE WANT TO DELETE THIS ORDER?"))
        {

            var xhr = new XMLHttpRequest();
            var url = "./staff_order.php?del&pi=" + productnumber;
            xhr.open("GET", url, true);
            xhr.onload = function ()
            {
                if (xhr.status === 200)
                {
                    alert("Delete Order Successfully");
                    window.location.reload();
                }else
                {
                    alert("Delete Order Unsuccessful: " + xhr.statusText);
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
if (isset($_GET['del']))
{
    $orderid = $_GET['pi'];

    $sql = "DELETE FROM orderitem WHERE orderid = '$orderid'";
    $sql2 = "DELETE FROM ordertable WHERE orderid = '$orderid' ";

    mysqli_query($connect,$sql);
    mysqli_query($connect,$sql2);
}
?>