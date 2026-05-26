<?php
session_start();
$id =  $_SESSION['name'];

include("../database.php");

    $sql5 = "SELECT * FROM cart where Cus_ID ='$id'";
    $result = mysqli_query($connect,$sql5);
    $total2 = 0;

    while($check2 = mysqli_fetch_assoc($result))
    {
    $productidcart1 = $check2['productid'];
    $sizeidcart1 = $check2['sizeid'];
    $qunidcart2 = $check2['cartquan'];

    $sql6 = "SELECT * FROM product where productid ='$productidcart1' AND sizeid='$sizeidcart1'";
    $result22 = mysqli_query($connect,$sql6);

    $find2 = mysqli_fetch_assoc($result22);
    $oprice = $find2['productprice'];
    $namep = $find2['productname'];

    $total = $qunidcart2*$oprice;

    $total2 =$total2+$total;
    $_SESSION['price'] = $total2;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPING CART - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./popup2.css">
    <style>
    body 
    {
        background-image: url(./cuspic/card.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
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
    <div class="cart">
        <h1>SHOPPING CART</h1>
        <?php
        $sql = "SELECT * FROM cart where Cus_ID ='$id'";
        $result = mysqli_query($connect,$sql);

        if(mysqli_num_rows($result))
        {
            while($findcategory = mysqli_fetch_assoc($result))
            {
                $cardid = $findcategory['cartid'];
                $productidcart = $findcategory['productid'];
                $sizeidcart = $findcategory['sizeid'];
                $qunidcart = $findcategory['cartquan'];

                $sql2 = "SELECT * FROM product where productid ='$productidcart' AND sizeid='$sizeidcart'";
                $result2 = mysqli_query($connect,$sql2);
                
                $find = mysqli_fetch_assoc($result2);
                $pp = $find['product_picture'];
                $name = $find['productname'];
                $oprice = $find['productprice'];
                $size = $find['sizeid'];
                $nihao = $find['productdescription'];
                $categoryid = $find['categoryid'];
                $type = $find['category2id'];
                $finalp = $oprice*$qunidcart;
                $finalp = sprintf("%.2f",$finalp);

                echo'

                <div class="product">
                    <img class="pp" src="../staff/pimage/'.$pp.'" alt="Product Image">
                    <div class="product-details">
                        <h2>'.$name.'</h2>
                        <span>SIZE :'.$size.'</span>
                        <p>QUANTITY :'."$qunidcart".'</p>
                        <div class="price">RM'."$finalp".'</div>
                        <div class="price2" style="display: none;">'."$oprice".'</div>
                        <div class="dge" style="display: none;">'."$nihao".'</div>
                        <div class="ide" style="display: none;">'."$productidcart".'</div>
                        <div class="ctid" style="display: none;">'."$categoryid".'</div>
                        <div class="type" style="display: none;">'."$type".'</div>
                        <div class="ssr" style="display: none;">'.$size.'</div>
                        <div class="wt" style="display: none;">'.$qunidcart.'</div>
                        <div class="guowula" style="display: none;">'.$cardid.'</div>
                    </div>
                    <img class="eddata" src="../icron/pencil-regular-24.png" alt="MODIFY" height="30px" width="30px">
                    <img src="../icron/trash-regular-24.png" alt="" height="30px" width="30px">
                </div>';
            }
        }else
        {
            echo "YOU DID NOT ADD ANY THING IN THE CART";
        }
        ?>
        <div class="show_price">TOTAL PRICE: RM <?php echo "$total2";?></div>
        <form method="post">
        <button class="buy2" onclick="guanbi();" type="button">BACK</button>
        <button class="buy" type="submit" name="check">BUY</button>
        </form>
    </div>
    <div class="popup" id="nihao">
        <div class="content">
            <div class="pic"></div>
            <div class="desc">
            <span class="close">&times;</span>
            <div class="productname"></div><br>
            <div class="descproduct"></div><br>
            <div><span><span class="title">PRODUCT ID:</span><span class="pid"></span></span><span class="kongge"><span class="title">CATEGORY ID:</span><span class="cateid"></span></div></span>
            <div class="pricepopup"></div>
            <form method="post" name="ee">
            <br>
            <input id="ct" type="text" name="cart" style="display: none;">
            <input id="wy" type="text" name="pi" style="display: none;">
            <label for="sizeid">Size</label>
            <select name="size" id="sizeid"></select>
            </select><br>
            <div class="quan"><label for="bb">QUANTITY</label><br>
            <input type="number" name="num" id="bb" min="1" placeholder="QUANTITY" value="1" max="200">
            </div>
            <button class="back" type="submit" name="del">DELETE</button>
            <input class="sub" type="submit" name="hi" value="UPDATE">
            </form>
        </div>
        </div>  
    </div>
</body>
</html>
<script>
    var pop = document.getElementById("nihao");
    var closepopup =document.getElementsByClassName("close")[0];

    var image = document.querySelectorAll('.product img');
    var button = document.querySelectorAll('.product .button');
    
    image.forEach(function(image) 
    {image.addEventListener('click',showPopup);
    }
    );

    button.forEach(function(button) 
    {button.addEventListener('click',showPopup);
    }
    );

    function showPopup()
    {
        pop.style.display = "block";
        var card = this.closest('.product');
        var productName = card.querySelector('.product h2').textContent;
        var productprice = card.querySelector('.product .price2').textContent;
        var productdesc = card.querySelector('.product .dge').textContent;
        var productid = card.querySelector('.product .ide').textContent;
        var categoryid = card.querySelector('.product .ctid').textContent;
        var categoryid2 = card.querySelector('.product .type').textContent;
        var sizeid = card.querySelector('.product .ssr').textContent;
        var shuliang = card.querySelector('.product .wt').textContent;
        var cartid = card.querySelector('.product .guowula').textContent;
        var imgjj = card.querySelector('.pp').src;
        var clearcontent = document.getElementsByClassName('pic')[0];


        document.getElementsByClassName('productname')[0].textContent = productName;
        document.getElementsByClassName('descproduct')[0].textContent = productdesc;
        document.getElementsByClassName('pid')[0].textContent = productid;
        document.getElementsByClassName('cateid')[0].textContent = categoryid;
        document.getElementsByClassName('pricepopup')[0].textContent = "RM" + productprice;

        clearcontent.innerHTML = '';
        var image = document.createElement('img');
        image.src = imgjj;
        clearcontent.appendChild(image);
        
        var e = document.getElementById("wy");
        e.value = productid.trim();

        var aaa = document.getElementById("ct");
        aaa.value = cartid.trim();

        var select = document.getElementById("sizeid");
        var ssize = document.createElement("option");
        var msize = document.createElement("option");
        var lsize = document.createElement("option");
        var xssize = document.createElement("option");

        ssize.value = "S02";
        msize.value = "S03";
        lsize.value = "S04";
        xssize.value = "S01";

        ssize.text = "S";
        msize.text = "M";
        lsize.text = "L";
        xssize.text = "XS";

        if(categoryid2 == "T01" || categoryid2 == "T02" || categoryid2 == "T03" || categoryid2 == "T05" || categoryid2 == "T06")
        {
            if(sizeid=="S02")
            {
                select.add(ssize);
                select.add(msize);
                select.add(lsize);
            }else if(sizeid=="S03")
            {
                select.add(msize);
                select.add(ssize);
                select.add(lsize);
            }else if(sizeid=="S04")
            {
                select.add(lsize);
                select.add(ssize);
                select.add(msize);
            }else
            {
                select.add(xssize);
            }
        }else
        {
            var select = document.getElementById("sizeid");
            var nosize = document.createElement("option");
            nosize.value = "S05";
            nosize.text = "NO SIZE";
            select.add(nosize);
        }

    var inputprice = document.getElementById('bb');
    inputprice.value = shuliang;
    inputprice.addEventListener('input',function(event)
    {
        var nachushuzhi = event.target.value;
        var newvalue;
        newvalue = nachushuzhi*productprice;
        newvalue = newvalue.toFixed(2);
        
        document.getElementsByClassName('pricepopup')[0].textContent = "RM" + newvalue;
    })
    
    }
    closepopup.onclick = function()
    {
        pop.style.display = "none";
        var select = document.getElementById("sizeid");
        select.innerHTML = '';
        var q = document.getElementById("bb");
        q.value = "";
    }
    function guanbi()
    {
        window.location.href='./men.php';
    }
</script>
<?php
if (isset($_POST["hi"]))
{
    $cartidq = $_POST["cart"];
    $productidq = $_POST["pi"];
    $sizeq = $_POST["size"];
    $quanq = $_POST["num"];
    
    $sql = "SELECT * FROM product WHERE productid='$productidq' AND sizeid='$sizeq'";
    $result = mysqli_query($connect, $sql);

    $findname = mysqli_fetch_assoc($result);
    $quantity = $findname['quantity'];
    $nameofproduct = $findname['productname'];

    if($quanq > $quantity)
    {
        ?>
    <script type="text/javascript">
        alert("<?php echo "SORRY WE JUST HAVE $quantity $nameofproduct" ?>");
    </script>
    <?php
    }else
    {
        $sql2 = "update cart set sizeid ='$sizeq', cartquan='$quanq' where Cus_ID='$id' AND cartid='$cartidq' AND productid='$productidq'";
    mysqli_query($connect, $sql2);

    ?>
    <script type="text/javascript">
        alert("<?php echo "SUCCESSFUL EDIT" ?>");
        window.location.href='./cart.php';
    </script>
    <?php
    }
}

if (isset($_POST["del"]))
{
    $cartidq = $_POST["cart"];
    $productidq = $_POST["pi"];
    $sizeq = $_POST["size"];

    $sql3 = "DELETE FROM cart WHERE cartid = '$cartidq'";
    $result3 = mysqli_query($connect, $sql3);

    $sql4 = "SELECT * FROM product WHERE productid='$productidq' AND sizeid='$sizeq'";
    $result = mysqli_query($connect, $sql4);

    $findname = mysqli_fetch_assoc($result);
    $nameofproduct = $findname['productname'];

    ?>
    <script type="text/javascript">
        alert("<?php echo "$nameofproduct HAVE BEEN DELETE FROM YOUR CART" ?>");
        window.location.href='./cart.php';
    </script>
    <?php
}

if(isset($_POST["check"]))
{
    $sql5 = "SELECT * FROM cart where Cus_ID ='$id'";
    $result = mysqli_query($connect,$sql5);

    while($check2 = mysqli_fetch_assoc($result))
    {
        $productidcart1 = $check2['productid'];
        $sizeidcart1 = $check2['sizeid'];
        $qunidcart2 = $check2['cartquan'];

        $sql6 = "SELECT * FROM product where productid ='$productidcart1' AND sizeid='$sizeidcart1'";
        $result22 = mysqli_query($connect,$sql6);

        $find2 = mysqli_fetch_assoc($result22);
        $quantityp = $find2['quantity'];
        $namep = $find2['productname'];

        if($qunidcart2 > $quantityp)
        {
            ?>
            <script type="text/javascript">
                alert("<?php echo "SORRY $namep ONLY HAVE $quantityp" ?>");
                window.location.href='./cart.php';
            </script>
            <?php
        }else
        {
            ?>
            <script type="text/javascript">
                alert("<?php echo "PRESS OK TURN INTO PAYMENT PAGE" ?>");
                window.location.href='./payment.php';
            </script>
            <?php
        }

    }

}
?>
