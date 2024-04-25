<?php
$conn = new mysqli('localhost', 'root', '', 'user');

if ($conn->connect_error) {
    echo "Connection failed :" . $conn->connect_error;
    exit;
} else {
echo "Connection successful-";
}
$conn->set_charset('utf8');
