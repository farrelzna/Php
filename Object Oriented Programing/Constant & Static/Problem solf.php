<?php
class Probelm {
    protected static $title = "Page masalah";

    protected static function getTitlePage () {
        echo "halaman ini rusak '" . self::$title . "'";
    }
}
class Weblain extends Probelm {
    public function __construct(){
        Probelm::getTitlePage();
    }
}

new Weblain;

//=================================================================================================================//