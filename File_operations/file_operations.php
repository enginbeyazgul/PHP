<?php
    //$yazi = 'deneme'.rand(0,100)."\n"; --dosyaya yazmak için random yazi--
    $dosya = fopen('text.txt','a+');
    //fwrite($dosya,$yazi); --random yazıyı dosyaya işleme--
    echo fread($dosya,55);
    fclose($dosya);
    
?>