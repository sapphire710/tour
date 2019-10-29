<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method ==='GET'){
    require '../view/admin/cateinsert.html';
}else{
    require '../lib/common.php';
    $data = $_POST;

    require '../lib/db.php';

    $key = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into category ($key) values($value)";
    $mysql->query($sql);
    if($mysql->affected_rows>0){
        echo json_encode([
            'code' => 200,
            'msg' => '插入成功'
        ]);
    }else{
        echo json_encode([
            'code' => 200,
            'msg' => '插入失败'
        ]);
    }
}