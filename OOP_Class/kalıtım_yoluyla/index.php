<?php
class Calisanlar
{
    public $maas;
    public $adsoyad;
    public function adsoyad($adsoyad)
    {
        $this->adsoyad = $adsoyad;
    }
    public function maas($maas)
    {
        $this->maas = $maas;
    }
    public function senelikMaas()
    {
        return ($this->maas*12).'₺';
    }
}
class Muhasebeci extends Calisanlar
{
    
}
class IT extends Calisanlar
{
    public function senelikMaas()
    {
        return 'IT çalışanı '.$this->adsoyad.' senelik '.parent::senelikMaas().' maaş almaktadır.';
    }
}

$muhasebeci = new Muhasebeci;
$muhasebeci->adsoyad('faik bakır');
$muhasebeci->maas(2500);
echo 'muhasebeci senelik maaş :'.$muhasebeci->senelikMaas().'<br>';

$it = new IT;
$it->adsoyad('engin beyazgül');
$it->maas(7000);
echo $it->senelikMaas();
?>