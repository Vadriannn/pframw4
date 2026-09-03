<?php
header('Content-Type: application/json');
$users = [
'dosen'=>['pass'=>'api123','role'=>'admin'],
'mhs'=>['pass'=>'mhs123','role'=>'reader']
];
$u=$_SERVER['PHP_AUTH_USER'] ?? '';
$p=$_SERVER['PHP_AUTH_PW'] ?? '';
if (!isset($users[$u]) || $users[$u]['pass']!==$p) {
http_response_code(401);
exit(json_encode(['error'=>'Unauthorized']));
}
if ($users[$u]['role']!=='admin') {
http_response_code(403);
exit(json_encode(['error'=>'Forbidden']));
}
echo json_encode(['message'=>'Data rahasia admin']);
?>