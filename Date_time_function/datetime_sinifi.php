<?php
$tarih = new DateTime('+7 day');//DateTime sınıfını tarih zamanlarda kullanabiliriz
echo $tarih->format('d-m-Y  H:m:s'."\n");
echo $tarih->getTimestamp();//unix formatında zamanı bulur yani 1970 den geçen saniye
?>