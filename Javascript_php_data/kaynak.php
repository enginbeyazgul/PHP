<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaynak</title>
</head>
<body>
<?php
try {$baglan = new PDO('mysql:host=localhost;dbname=javascript_veri;charset=utf8', 'root', '');}
catch(PDOException $e) { echo $e->getMessage(); }
if($_POST){
    $gelen = $_POST['data'];
}
$sorgu = $baglan->query("SELECT * FROM kisiler WHERE id = '{$gelen}'")->fetch(PDO::FETCH_ASSOC);
    echo 'id: '.$sorgu["id"].'<br>'.
    'ad soyad: '.$sorgu["name"].'<br>'.
    'yaş: '.$sorgu["age"].'<br>'.
    'ülke: '.$sorgu["country"].'<br>';
?> 
</body>
</html>