<?php

include_once '../config.php';

global $db;

$id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];

$result = $db->query("UPDATE users SET users_username = '$username', users_email = '$email', users_role = '$role' WHERE users_id = '$id';");

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=user_form");
} else {
    header("Location:" . __URI__ . "index.php?page=user");
}

die();
