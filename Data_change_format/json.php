<?php
$dizi = 
    [
    'kisiler'=>
        [
        [
            'ad'=>'engin',
            'soyad'=>'beyazgül'
        ],
        [
            'ad'=>'hacer',
            'soyad'=>'ersin'
        ]
        ]
    ];
echo json_encode($dizi).'<br>';//dizimizi json formatına dönüştürdük

$json = 
'{
    "kisiler":
    [
        {
            "ad": "engin",
            "soyad": "beyazgül"
        },
        {
            "ad": "eda",
            "soyad": "beyazgül"
        }
    ]
}';
$arr = json_decode($json,true);//json formatındaki çıktıyı diziye dönüştürdük
print_r($arr);
?>