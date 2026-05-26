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
    <title>CUSTOMER EVALUATION - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <script src="./print.js"></script>
    <style>
        body {
        background-image: url(./staffpicturedesign/evaluation.jpg);
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
    width: 200px;
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
    background-color: lightpink;
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
    <form method="post">
        <table>
            <tr>
                <td colspan="6" class="heading">EVALUATION FROM CUSTOMER<img src="../icron/user-solid-24.png" alt=""></td>
            </tr>
                <tr>
                    <th class="box2">NO</th>
                    <th class="box2">Rate ID</th>
                    <th class="box2">Customer ID</th>
                    <th class="box2">Rate</th>
                    <th class="box2">Comment</th>
                    <th class="box2">Action</th>
                </tr>
                <?php
                include("../database.php");
                $sql = "SELECT * FROM rate";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    while ($find = mysqli_fetch_assoc($result))
                    {
                        $id = $find['ratenumber'];
                        $custid = $find['Cus_id'];
                        $rate = $find['rate'];
                        $comment = $find['comment'];
                        $no = 0;
                        $no++;
                        echo '<tr>';
                        echo '<td>'."$no".'</td>';
                        echo '<td>'."$id".'</td>';
                        echo '<td>'."$custid".'</td>';
                        echo '<td>'."$rate".'</td>';
                        echo '<td>'."$comment".'</td>';
                        echo '<td class="box2"><img src="../icron/trash-regular-24.png" alt="BIN" onclick="deleteProduct(\'' . $id . '\');"></td>';
                        echo '</tr>';
                    }
                }else
                {
                    echo '<tr><td colspan="6">SORRY DID NOT HAVE ANY EVALUATION</td></tr>';
                }
                echo '<tr><td colspan="6"><img onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td></tr>';
                ?>
        </table>
    </form>
    <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>
<script>
    function deleteProduct(comment)
    {
        if(confirm("DO YOU SURE WANT TO DELETE THIS RATE?"))
        {

            var xhr = new XMLHttpRequest();
            var url = "./staff_evaluation.php?del&pi=" + comment;
            xhr.open("GET", url, true);
            xhr.onload = function ()
            {
                if (xhr.status === 200)
                {
                    alert("Delete Rate Successfully");
                    window.location.reload();
                }else
                {
                    alert("Delete Rate Unsuccessful: " + xhr.statusText);
                }
            };
            xhr.onerror = function ()
            {
                alert("Request Error");
            };
            xhr.send();
        }
    }
    function printtable()
    {
        var printContents = document.querySelector('table').outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<?php
include("../database.php");

if (isset($_GET['del']))
{
    $rate = $_GET['pi'];

    $sql = "DELETE FROM rate WHERE ratenumber='$rate'";

    mysqli_query($connect,$sql);
    exit;
}
?>