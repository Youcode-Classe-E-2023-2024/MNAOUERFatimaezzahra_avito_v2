<?php

include_once '../config.php';

global $db;

$id = $_POST['post_id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$user_id = $_SESSION['user_id'];

$result = $db->query("UPDATE posts SET posts_title = '$title', posts_description = '$desc' WHERE posts_id = '$id';");

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=post_form");
} else {
    header("Location:" . __URI__ . "index.php?page=post");
}

die();
