<?php
$user='dosen'; $pass='api123';
$opts=['http'=>['header'=>
'Authorization: Basic '.base64_encode("$user:$pass")
]];
$ctx=stream_context_create($opts);
$url='http://localhost/api/admin.php';
echo file_get_contents($url,false,$ctx);
?>