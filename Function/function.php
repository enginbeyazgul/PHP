<?php
    $sayi1 = $_POST["sayi1"];
    $sayi2 = $_POST["sayi2"];
    function topla($x,$y)
    {
        return ($x+$y);
    }
    $a= topla($sayi1,$sayi2);
    echo'<form action="function.php" method="post">
        1. sayı: <input type="text" name="sayi1"></input></br></br>
        2. sayı: <input type="text" name="sayi2"></input></br></br>
        <input type="submit" value="Hesapla!"></input> '.$a.'
    </form>';
?>