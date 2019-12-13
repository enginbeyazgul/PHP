<?php
class Uye
{
    public $ad;
    public $soyad = "Beyazgül";
    //sabit değişken
    const YAS = 20;
    
    //class içindeki fonksiyonlar yani metodlar
    
    public function soyadGoster()
    {
        return $this->soyad;
    }
    public function topla($a,$b)
    {
        return $a+$b;
    }
    public function yasGoster()
    {
        return self::YAS;
    }
}

//class ı değişkene alma
$uye = new Uye;

//class içindeki değişkene atama yapmak
$uye->ad="Engin";

//class içindeki değişken çağırma
echo $uye->ad." ";

//class tan metod çağırma
echo $uye->soyadGoster()." ";
echo $uye->yasGoster()." ";
echo $uye->topla(5,4)." ";
?>