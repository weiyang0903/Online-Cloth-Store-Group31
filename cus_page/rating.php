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
    <title>RATING - COLIFE</title>
    <link rel="icon" href="../logo/title logo.jpg" type="jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./navigatiom.css">
    <style>
        body {
        background-image: url(./cuspic/rating.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
   .box
    {
        width: 500px;
        height: 400px;
        margin: 0 auto;
        position: relative;
        top: 120px;
        background: white;
        padding: 20px 30px;
        border: 1px solid black;
        border-radius:30px;
        box-shadow: 0 0 10px black;
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .star
    {
        text-align: center;
    }
    .box .star input
    {
        display: none;
        display: right;
    }
    .star label
    {
        font-size: 40px;
        color: gray;
        padding: 20px;
        float: right;
    }
    .star input:not(:checked) ~ label:hover, .star input:not(:checked) ~ label:hover ~label
    {
        color: yellow;
    }
    input:checked ~label
    {
        color: yellow;
    }
    input:checked ~ .rate1
    {
        color: red;
    }
    .comment
    {
        width: 100%;
        height: 100px;
    }
    textarea
    {
        height: 100%;
        width: 100%;
        outline: none;
        margin-top: 20px;
        border: 1px solid black;
    }
    button
    {
        background-color: rgb(91, 223, 93);
        color: white;
        border: none;
        border-radius: 5px;
        width: 100px;
        height: 30px;
        position: relative;
        top: 150px;
    }
    button:hover
    {
        background-color: rgb(0, 219, 0);
        cursor: pointer;
    }
    textarea:hover
    {
        box-shadow: 0 0 10px lightcoral;
    }
    .title
    {
        font-size: 25px;
        font-weight: 800;
    }
   .copyright
   {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
    position: fixed;
    bottom: -4px;
    }
    </style>
</head>
<body>
    <?php
    include("./header.php");
    ?>

    <div class="box">
        <div class="title" style="text-transform: uppercase;">Ratings and review</div>
        <div class="star">
            <form method="post">
            <input type="radio" name="rate" id="rate5" value="5">
            <label for="rate5" class="bx bxs-star"></label>
            <input type="radio" name="rate" id="rate4" value="4">
            <label for="rate4" class="bx bxs-star"></label>
            <input type="radio" name="rate" id="rate3" value="3">
            <label for="rate3" class="bx bxs-star"></label>
            <input type="radio" name="rate" id="rate2" value="2">
            <label for="rate2" class="bx bxs-star"></label>
            <input type="radio" name="rate" id="rate1" value="1">
            <label for="rate1" class="bx bxs-star"></label>
                <div class="comment">
                    <textarea cols="30" name="qq" id="qq" style="resize: none;" placeholder="review here"></textarea>
                </div>
                <div class="button">
                    <button type="submit" name="ratesubmit"><b>SUBMIT</b></button>
                </div>
            </form>
        </div>
    </div>

<div class="copyright">
    <p><em>Copyright &copy; 2024 COLIFE Company</em></p>
</div>
</body>
</html>
<?php
    if (isset($_POST["ratesubmit"]))
    {
        $rate = $_POST["rate"];  
        $comment = $_POST["qq"];

        if($rate == null && $comment == null)
        {
            ?>
            <script type="text/javascript">
            alert("<?php echo "SORRY YOU DID NOT INSERT SOMETHING" ?>");
            window.location.href='./rating.php';
            </script>
            <?php
        
        }else
        {
            $sql = "Insert into Rate(Cus_id, rate, comment) values ('$id', '$rate', '$comment')";
            mysqli_query($connect,$sql);
            ?>
            <script type="text/javascript">
            alert("<?php echo "YOUR RATING SUCCESSFUL UPDATE" ?>");
            window.location.href='./rating.php';
            </script>
            <?php
        }
        
    }

?>