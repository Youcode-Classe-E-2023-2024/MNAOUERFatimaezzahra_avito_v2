<?php

include_once '../config.php';

global $db;

$title = $_POST['title'];
$desc = $_POST['desc'];
$user_id = $_SESSION['user_id'];

$result = $db->query("INSERT INTO posts (posts_title, posts_description, posts_user) VALUES ('$title', '$desc', '$user_id');");

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=post_form");
} else {
    header("Location:" . __URI__ . "index.php?page=post");
}

die();
