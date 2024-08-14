<?php
$conn = mysqli_connect('localhost:3307', 'aayush','0987654321','testbim');

if (!$conn) {
    die("failed conn");
}

echo "successful";

