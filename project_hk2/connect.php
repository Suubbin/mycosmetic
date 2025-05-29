<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_hk2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công!";
?>
