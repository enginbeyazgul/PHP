<?php
function autoLoadController($className)
{
    $classFile = str_replace('\\','/',__DIR__).'/controller/'.strtolower($className).'.php';
    if(file_exists($classFile))
    {
        require $classFile;
    }
}
spl_autoload_register('autoLoadController');
$home = new Home;
echo $home->test();
?>