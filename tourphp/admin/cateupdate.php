<?php

$arr = $_POST;
$type = $arr['type'];
$values = $arr['value'];
$id = $arr['id'];

require '../lib/db.php';
$sql="update category set $type='$values' where id=$id";
var_dump($sql);
$update = $mysql->query($sql);

echo json_encode([
    'code' => 200,
    'msg' => '修改成功',
]);
