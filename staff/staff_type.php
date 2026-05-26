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
    <title>TYPE LIST - COLIFE</title>
    <link rel="icon" href="../Images/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
    body {
    background-image: url(./staffpicturedesign/tyoe1.jpg);
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
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

        <table>
            <tr>
                <td colspan="4" class="heading">TYPE<img src="../icron/category-solid-24.png" alt=""></td>
            </tr>
            <tr>
                <td class="box2">No.</td>
                <td class="box2">Type ID</td>
                <td class="box2">Type Name</td>
            </tr>
            <?php
            include("../database.php");
            $sql = "SELECT * FROM category2";
            $result = mysqli_query($connect, $sql);
            $nocat2 = 1;
            if (mysqli_num_rows($result) > 0)
            {
                while ($find = mysqli_fetch_assoc($result))
                {
                    $id = $find['category2id'];
                    $name = $find['category2name'];

                    echo '<tr>';
                    echo '<td>'."$nocat2".'</td>';
                    echo '<td>'."$id".'</td>';
                    echo '<td>'."$name".'</td>';
                    echo '</tr>';
                    $nocat2++;
                }
            }else
            {
                echo '<td colspan="4">SORRY DID NOT MATCH ANY INFORMATIOM PLECK CHECK AGAIN</td>';
            }
            ?>
            <tr>
                <td colspan="4"><img onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td>
            </tr>
        </table>
        <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>