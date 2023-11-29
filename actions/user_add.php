<?php

include_once '../config.php';

global $db;

$username = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];

$result = $db->query("INSERT INTO users (users_username, users_email, users_role, users_password) VALUES ('$username', '$email', '$role', 'password');");

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=user_form");
} else {
    header("Location:" . __URI__ . "index.php?page=user");
}

die();
