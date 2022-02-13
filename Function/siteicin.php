<?php
$ad = "engin";
function yaz(&$ref, $sayi1, $sayi2=5)
{
    global $ad;
    $ref = $sayi1+$sayi2;
    return $ref." ".$ad." ";
}
$sonuc = 10;
echo yaz($sonuc,10);
echo $sonuc;
?>