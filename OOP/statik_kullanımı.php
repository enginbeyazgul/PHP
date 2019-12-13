<?php
class File
{
    public static function oku()
    {
        return file_get_contents('dosya.txt');
    }
}
echo File::oku();
?>