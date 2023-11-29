<?php

include_once 'config.php';

if (!isset($_GET['page']))
{
    include_once 'views/home.php';
} else {
    if ($_GET['page'] == 'user' && isset($_SESSION['user_id']) && $_SESSION['role'] == 'user')
    {
        include_once 'views/home.php';
    }

    include_once 'views/' . $_GET['page'] . '.php';
}
