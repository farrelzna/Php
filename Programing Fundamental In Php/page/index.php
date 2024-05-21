<?php

//header

echo '<center><h1>header</h1></center>';
//nav
echo '<center><a href="?page=home"> home </a></center>';
echo '<center><a href="?page=about"> about </a></center>';
echo '<center><a href="?page=contact"> contact </a></center>';
echo '<br>';
echo '<center>';

//main

if((isset($_GET['page']))){
$page = $_GET['page'];
}
if((isset($_GET['page']))){
switch($page){
case "home":
    include 'home.php';
    break;
case "about":
    include 'about.php';
    break;
case "contact":
    include 'contact.php';
    break;
default:
    include 'home.php';
    break;
}
}
//footer

echo '<center><h1>footer</h1></center>';