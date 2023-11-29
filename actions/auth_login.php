<?php

include_once '../config.php';

global $db;

$result = $db->query('SELECT * FROM users WHERE users_email ="' . $_POST['email'] . '"  and users_password = "' . $_POST['pwd'] . '";');
$user = $result->fetch_assoc();

if (empty($user))
{
    header("Location:" . __URI__ . "index.php?page=login");
} else {
    $_SESSION['user_id'] = $user['users_id'];
    $_SESSION['username'] = $user['users_username'];
    $_SESSION['role'] = $user['users_role'];

    header("Location:" . __URI__ . "index.php?page=home");
}

die();
