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
    <title>CATEGORY LIST - COLIFE</title>
    <link rel="icon" href="../Images/title logo.jpg" type="png">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
    body {
    background-image: url(./staffpicturedesign/category.jpg);
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
   th
   {
    height: 100px;
    border: 1px solid black;
    background-color: lightblue;
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
    background-image: url(./staffpicturedesign/category1.jpg);
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
    margin-top: 210px;
}
.addproduct .back:hover
{
    background-color: rgb(227, 0, 30);
}
.addproduct .send
{
    float: right;
    margin-top: 210px;
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
.editdata label
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
    margin-top: 210px;
}
.editdata .back2:hover
{
    background-color: rgb(227, 0, 30);
}
.editdata .send
{
    float: right;
    margin-top: 210px;
}
.editdata input:hover, .addproduct textarea:hover
{
    box-shadow: 0 0 5px;
}
.solve
{
height: 200px;
width: 100%;
margin-top: 10px;
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

    <form method="post">
        <table>
            <tr>
                <td colspan="4" class="heading">CATEGORY<img src="../icron/category-solid-24.png" alt=""></td>
            </tr>
            <tr>
                <th class="box2">No.</th>
                <th class="box2">Category ID</th>
                <th class="box2">Category Name</th>
                <th class="box2">Action</th>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM category";
            $result = mysqli_query($connect, $sql);
            $nocat = 1;
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $id = $find['categoryid'];
                    $name = $find['categoryname'];

                    echo '<tr>';
                    echo '<td>'."$nocat".'</td>';
                    echo '<td class="hh">'."$id".'</td>';
                    echo '<td class="gg">'."$name".'</td>';
                    echo '<td class="box2"><img class="eddata" src="../icron/pencil-regular-24.png" alt="MODIFY"></img><img class="eddata" src="../icron/trash-regular-24.png" alt="BIN"></td>';
                    echo '</tr>';
                    $nocat++;
                }
            }else
            {
                echo '<td colspan="4">SORRY DID NOT HAVE ANY CATAGORY PLEASE ADD</td>';
            }
            ?>
            <tr>
                <td colspan="4"> <button class="acategory" type="button">ADD CATEGORY</button><img class="printla" onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table>
    </form>
    <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
    <div id="add1" class="add2">
    <div class="add3">
        <div class="pic" id="porimage"></div>
            <div class="addproduct">
            <span class="close">&times;</span>
            <div class="heading" style="text-align: center; margin-bottom: 20px;">ADD CATEGORY</div>
            <form method="post">

            <label for="categoryid">Category ID: </label>
            <input name="sn" id="category" type="text" placeholder="ENTER THE CATEGORY ID" required><br><br>
            
            <label for="categoryname">Category name: </label>
            <input name="pn" id="categoryname" type="text" placeholder="ENTER THE CATEGORY NAME" required><br><br>
            
            <button type="button" class="back">BACK</button>
            <button type="reset" class="clear">CLEAR</button>
            <button type="submit" class="send" name="sendd">SEND</button>    
        </form>
        </div>
    </div>
    </div>
    </div>
    <div id="edit1" class="edit2">
    <div class="edit3">
        <div class="pic"></div>
            <div class="editdata">
            <span class="close2">&times;</span>
            <div class="heading" style="text-align: center; margin-bottom: 20px;">EDIT CATEGORY</div>
            <form method="post">

            <label for="categoryid">Category ID: </label>
            <input name="snn" id="category2" type="text" placeholder="ENTER THE CATEGORY ID" readonly><br><br>
            
            <label for="categoryname">Category name: </label>
            <input name="pnn" id="categoryname2" type="text" placeholder="ENTER THE CATEGORY NAME" required><br><br>
            
            <button type="submit" class="back2" name="dele">DELETE</button>
            <button type="submit" class="send" name="rsend">UPDATE</button>    
        </form>
        </div>
    </div>
    </div>
</body>
</html>
<script type="text/javascript">
var open = document.querySelector(".acategory");
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
            var catid = card.querySelector('.hh').textContent;
            var name23 = card.querySelector('.gg').textContent;

            var id2 = document.getElementById("category2");
            var cusname2 = document.getElementById("categoryname2");

            id2.value = catid;
            cusname2.value = name23;
        });
    });

    var closepopup10 = document.querySelector(".close2");

    closepopup10.addEventListener("click", function() {
        var popup2 = document.getElementById("edit1");
        popup2.style.display = "none";
    });
</script>
<?php
if (isset($_POST["sendd"]))
{
    
    $categoryid = $_POST["sn"];
    $cname = $_POST["pn"];
    

    $sql = "INSERT INTO category (categoryid, categoryname) values ('$categoryid', '$cname')";
    mysqli_query($connect,$sql);
    ?>
    <script type="text/javascript">
    alert("<?php echo "SUCCESSFUL ADD $cname" ?>");
    window.location.href='./staff_category.php';
    </script>
    <?php

}

if(isset($_POST["rsend"]))
    {
        $idde = $_POST["snn"];
        $kiminonamayiwa = $_POST["pnn"];
        

        mysqli_query($connect,"update category set categoryname ='$kiminonamayiwa' where categoryid = '$idde'");

        ?>
            <script type="text/javascript">
            alert("<?php echo "$idde $kiminonamayiwa IS UPDATE SUCCESSFUL"?>");
            window.location.href='./staff_category.php';
    </script>
    <?php
    }

    if(isset($_POST["dele"]))
    {
        $idde = $_POST["snn"];
        $kiminonamayiwa = $_POST["pnn"];

        mysqli_query($connect,"DELETE FROM cart WHERE categoryid='$idde'");
        mysqli_query($connect,"DELETE FROM product WHERE categoryid='$idde'");
        mysqli_query($connect,"DELETE FROM category WHERE categoryid='$idde'");

        ?>
            <script type="text/javascript">
            alert("<?php echo "$idde $kiminonamayiwa is delete complete"?>");
            window.location.href='./staff_category.php';
    </script>
    <?php
    }
?>
