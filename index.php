<?php header("Content-Type: text/html; charset=UTF-8");
$button=filter_input(INPUT_GET,"button", FILTER_SANITIZE_SPECIAL_CHARS);
require_once("head.php");
require_once("body.php");