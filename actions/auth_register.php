<?php

include_once '../config.php';

global $db;

$result = $db->query("SELECT * FROM users");
$users = $result->fetch_all();

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if (sizeof($users) == 0)
{
    $result = $db->query("INSERT INTO users (users_username, users_email, users_password, users_role) VALUES ('$username', '$email', '$pwd', 'admin');");
} else {
    $result = $db->query("INSERT INTO users (users_username, users_email, users_password) VALUES ('$username', '$email', '$pwd');");
}

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=register");
} else {
    header("Location:" . __URI__ . "index.php?page=home");
}

die();
