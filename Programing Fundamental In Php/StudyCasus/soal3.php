<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
]; //aray

foreach ($data as $list){
    if ($list["tahun"] % 4 == 0){ //jika hasili sama dengan 0 maka tahun nya kabisat
        echo $list['nama'] . " : Lahir Pada Tahun Kabisat ({$list['tahun']})" . "<br>";  
    } else{
        echo $list['nama'] . " : BUKAN Lahir Pada Tahun Kabisat ({$list['tahun']})" . "<br>";  
    }
}