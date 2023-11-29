<?php

session_start();

function dd($var)
{
    echo '<code>';
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    echo '</code>';
    die();
}

//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//$extra = 'mypage.php';

define('__URI__', "http://" . $_SERVER['HTTP_HOST'] . "/Avito_V2/");

$db = mysqli_connect('localhost', 'root', '', 'avito_db');
