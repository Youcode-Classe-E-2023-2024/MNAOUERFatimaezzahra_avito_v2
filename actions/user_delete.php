<?php

include_once '../config.php';

global $db;

$id = $_GET['id'];

$result = $db->query("DELETE FROM users WHERE users_id = '$id';");

if ($id == $_SESSION['user_id']) {
    header("Location:" . __URI__ . "actions/auth_logout.php");
}
else if (!$result) {
    header("Location:" . __URI__ . "index.php?page=user");
} else {
    header("Location:" . __URI__ . "index.php?page=user");
}

die();
