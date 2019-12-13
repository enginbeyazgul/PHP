<form action="" method="post">
    <input type="text" name="kullanici_adi"><br>
    <input type="text" name="sifre"><br>
    <input type="submit" value="gönder!!">
</form>
<?php

$uye="engin";
$sifre="1234";


if($_POST)
{   
    if($_POST["kullanici_adi"] == $uye && $_POST["sifre"] == $sifre)
    {
        $_SESSION["kullanici_adi"] = $_POST["kullanici_adi"];
        header('Location:/unsatisfied/Session');

    }
    elseif($_POST["kullanici_adi"] !== $uye || $_POST["sifre"] !== $sifre)
    {
        $hata = "kullanıcı adı veya parola hatalı";
    }
    if(isset($hata))
    {
        echo $hata;
    }
}
?>
