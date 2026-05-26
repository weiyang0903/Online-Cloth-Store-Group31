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
    <title>MEN - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./productcart1.css">
    <link rel="stylesheet" href="./navigatiom.css">
    <link rel="stylesheet" href="./category.css">
    <link rel="stylesheet" href="./popup.css">
    <style>
        body {
        background-image: url(./cuspic/men.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
    .cate2
    {
        position: relative;
        margin: 0 auto;
        top: 10px;
        width: 1400px;
        height: 450px;
    }
    .cate3
    {
        position: absolute;
        background-color: white;
        width: 300px;
        height: 450px;
    }
    .cate4
    {
        background-color: brown;
        position: absolute;
        width: 1100px;
        height: 450px;
        margin-left: 300px;
        display: flex;
        overflow-x: auto;
        white-space: nowrap;
    }
    .cate3_5
    {
        position: absolute;
        background-color: white;
        width: 300px;
        height: 450px;
        left: 1100px;
    }
    .cate4_5
    {
        background-color: brown;
        position: absolute;
        width: 1100px;
        height: 450px;
        margin-right: 300px;
        display: flex;
        overflow-x: auto;
        white-space: nowrap;
    }
    section::before
    {
        content: "";
        height: 90px;
        display: block;
    }
    .copyright {
    margin-top: 50px;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    bottom: 0;
    width: 100%;
}
.czx
{
    margin: auto auto;
    height: 200px;
    width: 400px;
    background-color: white;
    border-radius: 10px;
    position: relative;
    display: inline-block;
}
.czx2
{
    height: 200px;
    width: 400px;
    opacity: 0.7;
    border-radius: 10px;
}
.czx3 {
  position: absolute;
  top: 50%;
  right: 12px;
  font-weight: 900;
}
.czx2:hover
{
    opacity: 1;
}
    </style>
</head>
<body>
    
    <?php
    include("./header.php");
    ?>
    <div class="cate">
        <div class="cate1">
            <img src="../product_picture/men/men.jpg" alt="men">
        </div> 
    </div>

    <section id="cloth">
        <!-- cloth -->
        <div class="cate2">
             <div class="cate3"><img src="../product_picture/men/men_cloth.jpg" alt="cloth"></div>
             <div class="cate4">
             <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T01' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;"> ' . "$prodid" . '</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section id="pant">
    <!-- pant -->
    <div class="cate2">
        <div class="cate3_5"><img src="../product_picture/men/menpant.jpg" alt="pant"></div>
        <div class="cate4_5">
        <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T02' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;"> ' . "$prodid" . '</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
       </div>
   </div>
</section>

   <section id="Belt">
        <!-- belt -->
    <div class="cate2">
        <div class="cate3"><img src="../product_picture/men/men_belt.jpg" alt="belt"></div>
        <div class="cate4">
        <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T07' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;"> ' . "$prodid" . '</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
       </div>
   </div>
    
</section>

<section id="tie">
    <!-- tie -->
    <div class="cate2">
     <div class="cate3_5"><img src="../product_picture/men/men_tie.jpg" alt="tie"></div>
     <div class="cate4_5">
     <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T04' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;"> ' . "$prodid" . '</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
    </div>
</div>

<section id="socks">
    <!-- socks -->
    <div class="cate2">
        <div class="cate3"><img src="../product_picture/women/Socks.jpg" alt="sock"></div>
        <div class="cate4">
        <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T05' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;">'."$prodid".'</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
       </div>
   </div>
</section>

<section id="jacket">
    <!-- jacket -->
    <div class="cate2">
     <div class="cate3_5"><img src="../product_picture/men/men_jacket.jpg" alt="jacket"></div>
     <div class="cate4_5">
     <?php
                $haha = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice FROM product WHERE category2id = 'T06' AND categoryid = 'C002' GROUP BY productname;";
                $result = mysqli_query($connect,$haha);

                if(mysqli_num_rows($result) >= 1)
                {
                    while($findcategory = mysqli_fetch_assoc($result))
                    {
                        $prodid = $findcategory['productid'];
                        $price = $findcategory['productprice'];
                        $name = $findcategory['productname'];
                        $catid = $findcategory['categoryid'];
                        $cat2id = $findcategory['category2id'];
                        $proddesc = $findcategory['productdescription'];
                        $productimage = $findcategory['product_picture'];

                        echo '<div class="card1">';
                        echo '<img class="hahaimg" src="../staff/pimage/'.$productimage.'">';
                        echo '<p style="font-size: 20px;">' . "$name" . '</p>';
                        echo '<p class="price">RM ' . "$price" . '</p>';
                        echo '<p class="lyz" style="display: none;">' . "$price" . '</p>';
                        echo '<p class="productid" style="display: none;"> ' . "$prodid" . '</p>';
                        echo '<p class="categoryid" style="display: none;">'."$catid".'</p>';
                        echo '<p class="gbs" style="display: none;">'."$cat2id".'</p>';
                        echo '<p class="productdesc" style="display: none;">'."$proddesc".'</p>';
                        echo '<div class="button">Add to carT</div>';
                        echo '</div>';
                    }
                }else
                {
                    echo '<div class="czx"><div><img class="czx2" src="./cuspic/no.jpg" alt="SORRY DID NOT HAVE ALREADY"><span class="czx3">SORRY DID NOT HAVE AREADY</span></div></div>';
                }
                ?>
    </div>
</div>
</section>
<div class="copyright">
    <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
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
            <input id="wy" type="text" name="pi" style="display: none;">
            <input id="cjx" type="text" name="pie" style="display: none;">
            <label for="sizeid">Size</label>
            <select name="size" id="sizeid"></select>
            </select><br>
            <div class="quan"><label for="bb">QUANTITY</label><br>
            <input type="number" name="num" id="bb" min="1" placeholder="QUANTITY" value="1" max="200">
            </div>
            <button class="back" type="button" onclick="guanbi();">BACK</button>
            <input class="sub" type="submit" name="hi" value="ADD TO CART">
            </form>
        </div>
        </div>  
    </div>
</body>
</html>
<script type="text/javascript">
    var pop = document.getElementById("nihao");
    var closepopup =document.getElementsByClassName("close")[0];

    var image = document.querySelectorAll('.card1 img');
    var button = document.querySelectorAll('.card1 .button');
    
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
        var card = this.closest('.card1');
        var productName = card.querySelector('p:first-of-type').textContent;
        var productprice = card.querySelector('p.lyz').textContent;
        var productdesc = card.querySelector('p.productdesc').textContent;
        var productid = card.querySelector('p.productid').textContent;
        var categoryid = card.querySelector('p.categoryid').textContent;
        var categoryid2 = card.querySelector('p.gbs').textContent;
        var imgjj = card.querySelector('.hahaimg').src;
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

        var dd = document.getElementById("cjx");
        dd.value = categoryid.trim();

        if(categoryid2 == "T01" || categoryid2 == "T02" || categoryid2 == "T03" || categoryid2 == "T05" || categoryid2 == "T06")
        {
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

            select.add(ssize);
            select.add(msize);
            select.add(lsize);
        }else
        {
            var select = document.getElementById("sizeid");
            var nosize = document.createElement("option");
            nosize.value = "S05";
            nosize.text = "NO SIZE";
            select.add(nosize);
        }

        var inputprice = document.getElementById('bb');

        inputprice.addEventListener('input',function(event)
    {
        var nachushuzhi = event.target.value;
        var newvalue;
        newvalue = nachushuzhi*productprice;
        newvalue = newvalue.toFixed(2);
        
        document.getElementsByClassName('pricepopup')[0].textContent = "RM" + newvalue;
    }    
    )
    
    }
    function guanbi()
    {
        pop.style.display = "none";
        var select = document.getElementById("sizeid");
        select.innerHTML = '';
        var q = document.getElementById("bb");
        q.value = 1;
    }
    closepopup.onclick = function()
    {
        pop.style.display = "none";
        var select = document.getElementById("sizeid");
        select.innerHTML = '';
        var q = document.getElementById("bb");
        q.value = 1;
    }
    window.addEventListener('load2', function()
{
    const scrollPosition = localStorage.getItem('scrollPosition2');
    if (scrollPosition !== null) {
        window.scrollTo(0, parseInt(scrollPosition, 10));
        localStorage.removeItem('scrollPosition2');
    }
});

window.addEventListener('beforeunload2', function()
{
    localStorage.setItem('scrollPosition2', window.scrollY);
});
</script>
<?php
    if (isset($_POST["hi"]))
    {
        include("../database.php");
        $ccc = $_POST["pie"];
        $wowo = $_POST["pi"];
        $size = $_POST["size"];
        $quan = $_POST["num"];

    
        $zenles = mysqli_query($connect, "SELECT * FROM cart WHERE Cus_ID='$id' AND productid='$wowo' AND sizeid='$size'");
        if(mysqli_num_rows($zenles) == 1)
        {
            $de = mysqli_fetch_assoc($zenles);
            $quantitycart = $de['cartquan'];

            $r = mysqli_query($connect, "SELECT * FROM product WHERE productid='$wowo' AND sizeid='$size'");
            $a = mysqli_fetch_assoc($r);
            $productquantity = $a['quantity'];
            $nameofproduct = $a['productname'];

            $newvalue =0;
            $newvalue = $quantitycart + $quan;

            if($newvalue > $productquantity)
            {
                ?>
            <script type="text/javascript">
                alert("<?php echo "SORRY WE JUST HAVE $productquantity YOUR CART ALREADY HAVE $quantitycart" ?>");
                window.location.href='./men.php';
            </script>
            <?php
            }else
            {
                mysqli_query($connect,"update cart set cartquan ='$newvalue' where productid='$wowo' AND sizeid='$size'");
                ?>
                <script type="text/javascript">
                    alert("<?php echo "SUCCESSFUL ADD $nameofproduct" ?>");
                    window.location.href='./men.php';
                </script>
                <?php
            }
        }else
        {
            $sql = "SELECT * FROM product WHERE productid='$wowo' AND sizeid='$size'";
            $result = mysqli_query($connect, $sql);
    
            if(mysqli_num_rows($result) > 0)
            {
                $findname = mysqli_fetch_assoc($result);
                $quantity = $findname['quantity'];
                $nameofproduct = $findname['productname'];
    
                if($quan > $quantity)
                {
                    ?>
                <script type="text/javascript">
                    alert("<?php echo "SORRY WE JUST HAVE $quantity" ?>");
                </script>
                <?php
                }else
                {
                    $sql2 ="Insert into cart(Cus_ID, productid, sizeid, cartquan, categoryid) values ('$id', '$wowo', '$size', '$quan', '$ccc')";
                    mysqli_query($connect, $sql2);
                    ?>
                <script type="text/javascript">
                    alert("<?php echo "SUCCESSFUL ADD $nameofproduct" ?>");
                    window.location.href='./men.php';
                </script>
                <?php
                }
            }
        }


    }
?>
