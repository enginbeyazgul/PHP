<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body> 
<?php
try {$baglan = new PDO('mysql:host=localhost;dbname=javascript_veri;charset=utf8', 'root', '');}
catch(PDOException $e) { echo $e->getMessage(); }
$sorgu = $baglan->query("SELECT * FROM kisiler");
?>
    <select name="kisiler" onchange="example(this.value)">
        <?php foreach($sorgu as $veri){ ?>
        <option value="<?=$veri['id']?>"><?=$veri['name']?></option>
        <?php } ?>
    </select>
    <div id="result"></div>
    
<script>
    function example(data){
        var http = new XMLHttpRequest();
        http.open("POST","kaynak.php",true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            document.getElementById('result').innerHTML = http.responseText;
        }
        else{
            document.getElementsByClassName('result').innerHTML = "hata";
        }
        }
        http.send("data="+data);
    }
</script>
</body>
</html>