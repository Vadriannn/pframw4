<?php
$url = 'https://localhost/161124006/pfram/w4/api/products.php';
$json = file_get_contents($url);
$res = json_decode($json, true);
foreach ($res['data'] as $p) {
echo $p['name'].' - Rp'.
number_format($p['price']).'<br>';
}
