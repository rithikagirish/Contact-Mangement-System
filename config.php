<?php
$DB_HOST = getenv('DB_HOST') ?: 'localhost';
$DB_USER = getenv('DB_USER') ?: 'root';
$DB_PASS = getenv('DB_PASS') ?: 'mysql';
$DB_NAME = getenv('DB_NAME') ?: 'telephonedirectory';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

function h($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
?>