<?php
date_default_timezone_set('Europe/Istanbul');
$time = time()-(60*60*24);//bir gün öncesinin tarihine gittik 
echo date('d-m-Y  H:i:s',$time)."\n";//çeşitli harfler ile tarih ve zamana ulaşabiliriz.
$tarih = getdate();
print_r($tarih);//getdate in bize neler verdiğini görebiliriz
?>