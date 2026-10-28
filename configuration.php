<?php

$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_password = getenv('DB_PASSWORD') ?: '';
$db_name = getenv('DB_NAME') ?: 'shop_db';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die('Connection Failed!');
?>
