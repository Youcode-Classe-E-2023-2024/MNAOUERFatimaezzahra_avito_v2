<?php

include_once '../config.php';

session_destroy();
header("Location:" . __URI__ . "index.php?page=home");
die();
