<?php
$eposta = 'beyazgulengin@gmail.com';
$desen = '/^(\w+)@([a-z]+)\.([a-z]{2,})$/';
preg_match($desen, $eposta, $sonuc);
print_r($sonuc);
?>