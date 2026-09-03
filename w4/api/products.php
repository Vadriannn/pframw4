<?php
header('Content-Type: application/json; charset=utf-8');
$products = [
    ['id' => 1, 'name' => 'Mouse', 'price' => 125000],
    ['id' => 2, 'name' => 'Keyboard', 'price' => 275000],
    ['id' => 3, 'name' => 'Monitor', 'price' => 2500000],
    ['id' => 4, 'name' => 'Headset', 'price' => 500000],
    ['id' => 5, 'name' => 'Webcam', 'price' => 300000],
];
echo json_encode([
    'success' => true,
    'data' => $products
], JSON_PRETTY_PRINT);

?>