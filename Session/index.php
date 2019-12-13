<?php
    session_start();
    ob_start();

    
    if(isset($_SESSION["kullanici_adi"]))
    {
        include'admin.php';
    }
    else
    {
        include'log-in.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>
    
</body>
</html>