<?php
if($_POST)
{
    $sayi1 = $_POST["sayi1"];
    $sayi2 = $_POST["sayi2"];
    $a = topla($sayi1,$sayi2);
}
else{$a=0;}
?>
<form action="" method="post">
    1. sayı: <input type="text" name="sayi1"></input></br></br>
    2. sayı: <input type="text" name="sayi2"></input></br></br>
    <input type="submit" value="Hesapla!"></input> <?=$a?>
</form>
<?php
function topla($x,$y)
{
    return ($x+$y);
}
?>