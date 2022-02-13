<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get ve Post</title>
    <style>
    </style>
</head>
<body>
    <?php
        if($_POST)
        {
            $veri = "Post ile gelen veri: ".$_POST["veri"];
        }
        else if($_GET)
        {
            $veri = "Get ile gelen veri: ".$_GET["veri"];
        }
    ?>
<h1>Post:</h1>
    <form action="" method="post">
        <input type="text" name="veri">
        <input type="submit" value="Gönder">
    </form><br>
    <div class="sonuc"><?=isset($veri) ? $veri : false; ?></div>
    <h1>Get:</h1>
    <form action="" method="get">
        <input type="text" name="veri">
        <input type="submit" value="Gönder">
    </form>
    
    
</body>
</html>