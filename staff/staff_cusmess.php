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
    <title>CUSTOMER MESSAGE - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link rel="stylesheet" href="./navigation.css">
    <link rel="stylesheet" href="./staff_cusmess.css">
    <script src="./print.js"></script>
</head>
<body>
    <?php
    include("./header.php");
    ?>
        <table>
            <tr>
                <td colspan="4" class="heading">CUSTOMER MESSAGE<img src="../icron/user-solid-24.png" alt=""></td>
            </tr>
                <tr>
                    <th class="box2">No</th>
                    <th class="box2">Customer ID</th>
                    <th class="box2">Message</th>
                    <th class="box2">Action</th>
                </tr>
                <?php
                include("../database.php");
                $sql = "SELECT * FROM contactus";
                $result = mysqli_query($connect, $sql);
                $nomess = 1;
                if (mysqli_num_rows($result) > 0)
                {
                    while ($find = mysqli_fetch_assoc($result))
                    {
                        $id = $find['Cus_ID'];
                        $contactid = $find['contact_id'];
                        $message = $find['message'];
    
                        echo '<tr>';
                        echo '<td>'."$nomess".'</td>';
                        echo '<td>'."$id".'</td>';
                        echo '<td>'."$message".'</td>';
                        echo '<td class="box2"><img src="../icron/trash-regular-24.png" alt="BIN" onclick="deleteProduct(\'' . $contactid . '\');"></td>';
                        echo '</tr>';
                        $nomess++;
                    }
                }else
                {
                    echo '<tr><td colspan="6">SORRY DID NOT HAVE ANY CUSTOMER MESSAGE</td></tr>';
                }
                echo '<tr><td colspan="6"><img onclick="printtable()" src="../icron/printer-solid-24.png" alt="print"></td></tr>';
                ?>
        </table>
        <div class="solve"></div>
    <div class="copyright">
        <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
    </div>
</body>
</html>
<script>
    function deleteProduct(messagecus)
    {
        if(confirm("DO YOU SURE WANT TO DELETE THIS MESSAGE?"))
        {

            var xhr = new XMLHttpRequest();
            var url = "./staff_cusmess.php?del&pi=" + messagecus;
            
            xhr.open("GET", url, true);
            xhr.onload = function ()
            {
                if (xhr.status === 200)
                {
                    alert("Delete Message Successfully");
                    window.location.reload();
                }else
                {
                    alert("Delete Message Unsuccessful: " + xhr.statusText);
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
    include("../database.php");
    $contactus = $_GET['pi'];
    $sql = "DELETE FROM contactus WHERE contact_id='$contactus'";
    mysqli_query($connect,$sql);
    exit;
}
?>