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
    <title>STAFF PRODUCT - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(../photo/background.png);
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
    background-color: white;
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
        width: 100px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
   }
   button:hover
   {
    background-color: rgb(0, 219, 0);
   }
   .box2
   {
    background-color: lightblue;
   }
   .copyright {
    background-color: #333;
    margin-top: 20px;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative;
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
    background-image: url(./staffpicturedesign/addproduct.jpg);
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
    height: 20px;
    width: 200px;
}
.addproduct label
{
    margin-right: 10px;
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
    width: 100px;
}
.addproduct .back
{
    background-color: rgb(233, 67, 89);
}
.addproduct .back:hover
{
    background-color: rgb(227, 0, 30);
}
.addproduct .send
{
    float: right;
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
.solve
{
height: 200px;
width: 100%;
margin-top: 10px;
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
.pic2
{
    height: 500px;
    width: 350px;
    background-image: url(./staffpicturedesign/addproduct.jpg);
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
    height: 20px;
    width: 200px;
}
.editdata label
{
    margin-right: 10px;
}
.editdata textarea
{
    resize: none;
    height: 80px;
    width: 600px;

}
.editdata label
{
    text-transform: uppercase;
}
.editdata button
{
    height: 30px;
    width: 100px;
}
.editdata .back
{
    background-color: rgb(233, 67, 89);
}
.editdata .back:hover
{
    background-color: rgb(227, 0, 30);
}
.editdata .send
{
    float: right;
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
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

        <table>
            <tr>
                <td colspan="12" class="heading">PRODUCT LIST<img src="../icron/store-alt-regular-24.png" alt=""></td>
            </tr>
            <tr>
                <td class="box2">No</td>
                <td class="box2">Porduct Imaage</td>
                <td class="box2">Product ID</td>
                <td class="box2">Category ID</td>
                <td class="box2">Type ID</td>
                <td class="box2">Product Name</td>
                <td class="box2">Quantity</td>
                <td class="box2">Description</td>
                <td class="box2">Price (RM)</td>
                <td class="box2">Action</td>
            </tr>
            <tr>
            <?php
            include("../database.php");
            $sql = "SELECT productname, productid, categoryid, category2id, product_picture, productdescription, productprice, quantity FROM product GROUP BY productname";
            $result = mysqli_query($connect,$sql);
            $noprod = 1;
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $id = $find['productid'];
                    $name = $find['productname'];
                    $catid = $find['categoryid'];
                    $cat2id = $find['category2id'];
                    $proddesc = $find['productdescription'];
                    $price = $find['productprice'];
                    $productimage = $find['product_picture'];
                    $quantity = $find['quantity'];

                    echo '<tr>';
                    echo '<td>'."$noprod".'</td>';
                    echo '<td><img src="./pimage/'.$productimage.'"></td>';
                    echo '<td class="pp">'."$id".'</td>';
                    echo '<td class="lolo">'."$catid".'</td>';
                    echo '<td class="mmkl">'."$cat2id".'</td>';
                    echo '<td class="dd">'."$name".'</td>';
                    echo '<td class="ki90">'."$quantity".'</td>';
                    echo '<td class="jilo0">'."$proddesc".'</td>';
                    echo '<td class="jkjk">'."$price".'</td>';
                    echo '<td><img class="eddata" src="../icron/pencil-regular-24.png" alt="MODIFY"><img class="eddata" src="../icron/trash-regular-24.png" alt="BIN"></td>';
                    echo '</tr>';
                    $noprod++;
                }
            }else
            {
                echo"1200";
            }
            ?>    
            </tr>
                <td colspan="12"> <button type="button" class="ad">ADD PRODUCT</button><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
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
            <div class="heading" style="text-align: center; margin-bottom: 0px;">ADD PRODUCT</div>
            <form method="post" enctype="multipart/form-data">
            <label for="image">PRODUCT IMAGE</label><br>
            <input id="image" type="file" name="ip" required><br>

            <label for="productname">Product Name: </label>
            <input name="pn" id="productname" type="text" placeholder="ENTER THE PRODUCT NAME" required><br>
            
            <label for="productid">PRODUCT ID: </label>
            <input name="pi" id="productid" type="text" placeholder="ENTER THE PRODUCT ID" required><br>
            
            <label for="categoryid">CATEGORY ID: </label>
            <input name="ci" id="categoryid" type="text" placeholder="ENTER THE CATEGORY ID" required><br>
            
            <label for="typeid">Type: </label>
            <input name="ti" id="typeid" type="text" placeholder="ENTER THE TYPE ID" required>

            <label for="price" style="margin-left: 20px;">Price: </label>
            <input name="jiage" id="price" type="number" min="0" step="any" placeholder="ENTER THE PRICE" required><br>
            
            <label for="sizeid">Size </label>
            <select name="size" id="size1">
            <option value="S01">XS</option>
            <option value="S02">S</option>
            <option value="S03">M</option>
            <option value="S04">L</option>
            <option value="S05">NO SIZE</option>
            </select>
            <label for="quantity" style="margin-left: 20px;">QUANTITY: </label>
            <input name="shuliang" id="quantity" type="number" min="0" placeholder="ENTER THE QUANTITY" required><br>
            <label class="pd" for="description">description</label><br>
            <textarea name="pordesc" cols="50" name="productdesc" id="description" placeholder="ENTER THE PRODUCT DESCRIPTION" required></textarea>
            
            <button type="button" class="back">BACK</button>
            <button type="reset" class="clear" onclick="clearimage()">CLEAR</button>
            <button type="submit" class="send" name="saddproduct">UPDATE</button>    
        </form>
        </div>
    </div>
    </div>


    <div id="edit1" class="edit2">
    <div class="edit3">
        <div class="pic2" id="porimage">
            
            </div>
            <div class="editdata">
            <span class="close2">&times;</span>
            <div class="heading" style="text-align: center; margin-bottom: 0px;">ADD PRODUCT</div>
            <form method="post">

            <label for="productname1">Product Name: </label>
            <input name="pn1" id="productname1" type="text" placeholder="ENTER THE PRODUCT NAME" required><br>
            
            <label for="productid1">PRODUCT ID: </label>
            <input name="pi1" id="productid1" type="text" placeholder="ENTER THE PRODUCT ID" required><br>
            
            <label for="categoryid1">CATEGORY ID: </label>
            <input name="ci1" id="categoryid1" type="text" placeholder="ENTER THE CATEGORY ID" required><br>
            
            <label for="typeid1">Type: </label>
            <input name="ti1" id="typeid1" type="text" placeholder="ENTER THE TYPE ID" required><br>

            <label for="price1">Price: </label>
            <input name="jiage1" id="price1" type="number" min="0" step="any" placeholder="ENTER THE PRICE" required><br>
            
            
            <label for="quantity1">QUANTITY: </label>
            <input name="shuliang" id="quantity1" type="number" min="0" placeholder="ENTER THE QUANTITY" required><br>
            
            <label class="pd" for="description1">description</label><br>
            <textarea name="jjjjjjjjjj" cols="50" id="description1" placeholder="ENTER THE PRODUCT DESCRIPTION" required></textarea>
            <button type="submit" class="back" name="delete">DELETE</button>
            <button type="submit" class="send" name="edit">UPDATE</button>    
        </form>
        </div>
    </div>
    </div>
</body>
</html>
<script type="text/javascript">
    var open = document.querySelector(".ad");
    var popup = document.getElementById("add1");
    var closepopup = document.querySelector(".close");
    var closepopup2 = document.querySelector(".back");

    open.addEventListener("click",function() {popup.style.display = "block";});
    closepopup.addEventListener("click",function() {popup.style.display = "none"; });
    closepopup2.addEventListener("click",function() {popup.style.display = "none"; });

    document.getElementById('image').addEventListener('change',function(event)
    {
        var porpicture = document.getElementById('porimage');
        porpicture.innerHTML = '';

        var upimage = event.target.files[0];

        if(upimage)
        {
            var read = new FileReader();
            read.onload = function(e)
            {
                var img = document.createElement('img');
                img.src = e.target.result;
                porpicture.appendChild(img);
                porpicture.style.backgroundColor = "white";
                porpicture.style.backgroundImage = "none";
            }
            read.readAsDataURL(upimage);
        }
    }


)
    
function clearimage()
{
    var porpicture = document.getElementById('porimage');
    porpicture.innerHTML = '';
    porpicture.style.backgroundImage = "url('./staffpicturedesign/addproduct.jpg')";
}
var open2 = document.querySelectorAll(".eddata");
open2.forEach(function(button) {
    button.addEventListener("click", function() {
        var popup2 = document.getElementById("edit1");
        popup2.style.display = "block";
        var card = this.closest('tr');
        var name = card.querySelector('.dd').textContent;
        var pidid = card.querySelector('.pp').textContent;
        var cadid = card.querySelector('.lolo').textContent;
        var cadid2 = card.querySelector('.mmkl').textContent;
        var price = card.querySelector('.jkjk').textContent;
        var shuq = card.querySelector('.ki90').textContent;
        var desc = card.querySelector('.jilo0').textContent;

        var name4 = document.getElementById("productname1");
        var proid = document.getElementById("productid1");
        var cate1 = document.getElementById("categoryid1");
        var cate2 = document.getElementById("typeid1");
        var price56 = document.getElementById("price1");
        var quan56 = document.getElementById("quantity1");
        var desc56 = document.getElementById("description1");

        name4.value = name;
        proid.value = pidid;
        cate1.value = cadid;
        cate2.value = cadid2;
        price56.value = price;
        quan56.value = shuq;
        desc56.value = desc;
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
if (isset($_POST["saddproduct"]))
{
    $productimage = $_FILES['ip']['name'];
    $productid = $_POST["pi"];
    $productname = $_POST["pn"];
    $categoryid = $_POST["ci"];
    $typeid = $_POST["ti"];
    $price = $_POST["jiage"];
    $sizeid = $_POST["size"];
    $pordesc = $_POST["pordesc"];
    $porquantity = $_POST["shuliang"];

    $upload_directory = './pimage/';
    if(!is_dir($upload_directory))
    {
        mkdir($upload_directory,0755,true);
    }
    $upload_path = $upload_directory . $productimage;
    if(!move_uploaded_file($_FILES['ip']['tmp_name'], $upload_path))
    {
        ?>
        <script type="text/javascript">
            alert("<?php echo "SORRY PLEASE TRY AGAIN !!!!!!!!" ?>");
        </script>
        <?php
    }
    $sql = "INSERT INTO product (productid, categoryid, category2id, sizeid, productname, product_picture, productdescription, productprice, quantity) values ('$productid', '$categoryid', '$typeid', '$sizeid', '$productname', '$productimage', '$pordesc', '$price', '$porquantity')";
    mysqli_query($connect,$sql);
    ?>
    <script type="text/javascript">
    alert("<?php echo "SUCCESSFUL ADD $productname" ?>");
    window.location.href='./pp.php';
    </script>
    <?php

}

if (isset($_POST["edit"]))
{
    $productname4 = $_POST["pn1"];
    $productid4 = $_POST["pi1"];
    $categoryid4 = $_POST["ci1"];
    $typeid4 = $_POST["ti1"];
    $proprice4 = $_POST["jiage1"];
    $quan4 = $_POST["shuliang"];
    $desc4 = $_POST["jjjjjjjjjj"];

    $sql29="update product set productname ='$productname4', categoryid='$categoryid4', category2id='$typeid4', productprice='$proprice4', productdescription='$desc4', quantity='$quan4' where productid = '$productid4'";
    mysqli_query($connect,$sql29);
    ?>
    <script type="text/javascript">
    alert("<?php echo "PRODUCT IS UPDATE SUCCESSFUL" ?>");
    window.location.href='./pp.php';
    </script>
    <?php
}

if (isset($_POST['delete']))
{
    $productname4 = $_POST["pn1"];
    $productid4 = $_POST["pi1"];
    $categoryid4 = $_POST["ci1"];
    $typeid4 = $_POST["ti1"];
    $proprice4 = $_POST["jiage1"];
    $quan4 = $_POST["shuliang"];
    $desc4 = $_POST["jjjjjjjjjj"];

    $sql0 = "DELETE FROM cart WHERE productid='$productid4'";
    $sql00 = "DELETE FROM product WHERE productid='$productid4'";
    mysqli_query($connect,$sql0);
    mysqli_query($connect,$sql00);
    ?>
    <script type="text/javascript">
    alert("<?php echo "$productname4 IS DELETE" ?>");
    window.location.href='./pp.php';
    </script>
    <?php
}

?>
