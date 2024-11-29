<?php
include "../../connection.php";
echo json_encode([
    'status' => 'success',
    'message' => 'Withdrawal successful',
    'saldo' => $saldo
]);
?>