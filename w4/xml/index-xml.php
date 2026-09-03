<?php
$url = 'http://localhost/api/products-xml.php';
$xml = simplexml_load_file($url);
foreach ($xml->product as $p) {
    echo (string) $p->name . ' - Rp' . number_format((int) $p->price) . '<br>';
}
?>