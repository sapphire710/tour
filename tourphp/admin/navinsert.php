<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method ==='GET'){
    require '../view/admin/navinsert.html';
}else{
    require '../lib/common.php';
    $data = $_POST;

    $mysql = new mysqli ('localhost','root','','tour','3306');
    if ($mysql->connect_error) {
        echo '数据库连接失败，失败原因' . $mysql->connect_error;
        exit();
    }
    $mysql->query('set names utf8');
    $key = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into nav ($key) values($value)";
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