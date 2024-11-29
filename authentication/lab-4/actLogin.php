<?php
require '../../connection.php';
$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

$query = "SELECT * FROM users WHERE email = '$phoneNumber' and password = ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
if (isset($row)) {
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['user_id'] = $row['id'];
    header('location: '.$host.'/authentication/lab-2/otp.php');
    exit;
}
$_SESSION['error_message'] = "No Handphone tidak ditemukan";

header('location: '.$host.'/authentication/lab-2/');
exit;