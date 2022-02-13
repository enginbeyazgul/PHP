<?php
$unix = strtotime('+9 day',time());//9 gün sonrasına gittik
echo date('d-m-Y  H:m:s',$unix);
?>