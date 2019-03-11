<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "notes";

$mysqli = new mysqli($host, $user, $pass, $db);

// url website
$url_website = "http://localhost/notes";
$folder_website = "/notes";

// timezone
date_default_timezone_set("Asia/Jakarta");

?>