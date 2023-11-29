<?php

include_once '../config.php';

global $db;

$id = $_GET['id'];

$result = $db->query("DELETE FROM posts WHERE posts_id = '$id';");

if (!$result)
{
    header("Location:" . __URI__ . "index.php?page=post");
} else {
    header("Location:" . __URI__ . "index.php?page=post");
}

die();
