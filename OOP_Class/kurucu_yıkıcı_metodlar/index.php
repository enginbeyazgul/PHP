<?php
class DB
{
    private $db;
    public function __construct($host,$kadi,$sifre)
    {
        $this->db = new PDO('mysql:host='.$host,$kadi,$sifre);
    }
    public function getData()
    {
        echo'db den gelen data';
    }
    public function __destruct()
    {
        $this->db = null;
    }
}
$db = new DB('localhost','root','');
echo $db->getData();
?>