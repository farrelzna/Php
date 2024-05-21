<?php

// constant1

class Web1{
    const NAMA_WEB = "myweb.com";
}

echo Web1::NAMA_WEB;
echo "<br>";
echo "<br>";

//constant2

class Web2 {
    public static $title = "Frist page";

    public static function getTitlePage(){
        return "Nama halaman ini adalah '" . self::$title . "'";
        }
    }

    echo Web2::$title;
    echo "<br>";
    echo Web2::getTitlePage();
    echo "<br>";
    echo "<br>";

//=================================================================================================================//