<?php
function sefLink($str)
{
    $str = mb_strtolower($str,'UTF-8');//tüm harfleri küçültüyor ekstra büyük "i" gibi harfleride küçültüyor
    $str = str_replace(
    ['ı','ğ','ü','ö','ç','ş'],
    ['i','g','u','o','c','s'],
    $str
    );
    $str = preg_replace('/[^a-z0-9]/','-',$str);//normal karakterler harici her şeyi "-" yapıyor
    $str = preg_replace('/-+/','-',$str);//baştaki ve sondaki fazla tireleri kestik
    return trim($str,'-');
}
$str = "-Burası Deneme Çümlesidir 2019...";
echo sefLink($str);
?>