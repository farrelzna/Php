<?php

//static

class Web3{
    public static $title = "My page";
}

echo Web3::$title;
echo "<br>";
echo "<br>";


//static 2

class Web4 {
    public static $title = "My page";

    public function changetitle(){
        self::$title = 'My page2';
        return self::$title;
    }

    public function changetitle2(){
        return self::$title;
    }
}

class YourWeb extends Web4 {
    public function changetitle(){
        self::$title = 'Yourpage';
        return self::$title;
        }
    }

echo Web4::$title . "<br>";
$myweb = new Web4;
echo $myweb->changetitle() . "<br>" . $myweb->changetitle2();
echo "<br>";
$yourweb = new Yourweb;
echo $yourweb->changetitle() . "<br>" . $myweb->changetitle2();
echo "<br>";
echo "<br>";


//=================================================================================================================//

