<?php
echo'
<a href="/PHP/SEO/">anasayfa</a>
<a href="/PHP/SEO/iletisim">iletişim</a>
<a href="/PHP/SEO/hakkimizda">hakkımızda</a><br>
';
if(!isset($_GET["sayfa"]))
{
    $_GET["sayfa"] = "index";
}
switch ($_GET["sayfa"]) {
    case 'index':
        require_once 'anasayfa.php';
    break;
    case 'iletisim':
        require_once 'iletisim.php';
    break;
    case 'hakkimizda':
        require_once 'hakkimizda.php';
    break;
    case 'konu':
        require_once 'konu.php';
    break;
}
?>