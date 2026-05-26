<?php
session_start();
$id =  $_SESSION['name'];

include("../database.php");
$sql2 = "SELECT * FROM orderitem where Cus_ID ='$id'";
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
    <title>PAYMENT HISTORY - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./popup2.css">
    <script src="./history.js"></script>
    <style>
    body 
    {
        background-image: url(../photo/background.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .background
    {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: inherit;
        filter: blur(5px);
        z-index: -1;
    }
    .cart
    {
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px black;
        width: 1000px; 
        max-height: 80vh; 
        overflow-y: auto; 
        border-radius: 8px;
    }

    .product
    {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .product-select
    {
        margin-right: 10px;
    }

    .produc.pp
    {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
    }
    .product-details {
        margin-left: 20px;
        flex: 1;
    }
    .product-details h2 {
        margin: 0 0 10px 0;
    }
    .product-details p 
    {
        margin: 0 0 20px 0;
        color: #666;
    }
    .quantity {
        display: flex;
        align-items: center;
    }

    .buy 
    {
        margin-top: 20px;
        background-color: rgb(91, 223, 91);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
        width: 45%;
        text-align: center;
        float: right;
    }
    .buy:hover
    {
    background-color: rgb(0, 219, 0);
    }
    .buy2 
    {
        margin-top: 20px;
        background-color: rgb(233, 67, 89);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
        width: 45%;
        text-align: center;
    }
    .buy2:hover
    {
        background-color: rgb(227, 0, 30);
    }
    .show_price
    {
        font-weight: 900;
        font-size: 20px;
        display: flex;
        justify-content: right;
        align-items: right;
    }
    </style>
</head>
<body>
<div class="background"></div>
    <div class="cart">
        <h1>PAYMENT HISTORY</h1>
        <?php
        $sql = "SELECT * FROM orderitem where Cus_ID ='$id'";
        $result = mysqli_query($connect,$sql);

        if(mysqli_num_rows($result))
        {
            while($findcategory = mysqli_fetch_assoc($result))
            {
                $orderidi = $findcategory['orderid'];
                $productidi = $findcategory['productid'];
                $sizeidi = $findcategory['sizeid'];
                $quantityi = $findcategory['quantity'];
                $payi = $findcategory['pay'];
                

                $sql2 = "SELECT * FROM product where productid ='$productidi' AND sizeid='$sizeidi'";
                $result2 = mysqli_query($connect,$sql2);
                
                $find = mysqli_fetch_assoc($result2);
                $pp = $find['product_picture'];
                $name = $find['productname'];
                $oprice = $find['productprice'];
                $size = $find['sizeid'];
                $nihao = $find['productdescription'];
                $categoryid = $find['categoryid'];
                $type = $find['category2id'];

                $result3 = mysqli_query($connect,"SELECT * FROM ordertable where orderid ='$orderidi'");
                $findla = mysqli_fetch_assoc($result3);
                $day = $findla['day'];


                echo'

                <div class="product">
                    <img class="pp" src="../staff/pimage/'.$pp.'" alt="Product Image">
                    <div class="product-details">
                        <h2>'.$name.'</h2>
                        <span>SIZE :'.$size.'</span><br>
                        <span>DAY :'.$day.'</span><br><br>
                        <p>QUANTITY :'."$quantityi".'</p>
                        <div class="price">RM'."$payi".'</div>
                    </div>
                </div>';
            }
        }else
        {
            echo "YOU DID NOT ADD ANY PAYMENT HISTORY";
        }
        ?>
        <div><span class="show_price">TOTAL PRICE: <?php echo "RM$wy"?></span></div>
        <form method="post">
        <button class="buy2" onclick="backtoprofile()" type="button">BACK</button>
        <button class="buy" onclick="buy()" type="button">BUY MORE</button>
        </form>
    </div>
    
</body>
</html>