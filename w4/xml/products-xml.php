<?php
header('Content-Type: application/xml; charset=utf-8');
$xml = new SimpleXMLElement('<products/>');
$data =
    [
        ['id'=>1,'name'=>'Mouse','price'=>125000],
        ['id'=>2,'name'=>'Keyboard','price'=>275000]
    ];
foreach ($data as $p) {
$n=$xml->addChild('product');
$n->addChild('id',$p['id']);
$n->addChild('name',$p['name']);
$n->addChild('price',$p['price']);
}
echo $xml->asXML();
?>