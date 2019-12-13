<?php
class DB
{
    private $db;//değişken oluşturduk
    public function __construct($host,$kadi,$sifre)//yolladığımız ayarları değişkenlere aldık
    {
        $db = new PDO('mysql:host='.$host,$kadi,$sifre);//veritabanına bağlandık
    }
    public function getData()
    {
        echo'db den gelen data';//verileri  gösterdik
    }
    public function __destruct()
    {
        $this->db = null;//işimiz bittikten sonra metodu yıktık
    }
}
$db = new DB('localhost','root','');//DB clasını başlatıp parametre yolladık
echo $db->getData();//dataları gösterdik
?>