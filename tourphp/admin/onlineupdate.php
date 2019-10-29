<?php

$method = $_SERVER['REQUEST_METHOD'];
require '../lib/db.php';
require  '../lib/common.php';
if($method ==='GET'){
    $id = $_GET['id'];
    $sql="select * from online where id=$id";
    $res = $mysql->query($sql)->fetch_assoc();
    //转出来是一维关联数组
    $a=explode('-',$res['odate']);
    $datyear=$a[0];
    $datmouth=$a[1];
    $datdate=$a[2];


    require  '../view/admin/onlineupdate.html';
}else{
    $data = $_POST;
    date_default_timezone_set('Asia/Shanghai');
    $data['create_time'] = date('Y-m-d h:i:s');//date格式化日期，(格式、)当前时间

    $id = $data['id'];
    unset($data['id']);//删除gid

    $data['odate'] = $data['datyear'] . '-' . $data['datmouth'] . '-' . $data['datdata'];
    unset($data['datyear'],$data['datmouth'],$data['datdata']);

    $str = joinKeysValues($data);
    $sql = "update online set $str where id=$id;";
    $mysql->query($sql);


    if($mysql->affected_rows>0){
        echo json_encode([
            'code' => 200,
            'msg' => '修改成功'
        ]);
    }else{
        echo json_encode([
            'code' => 200,
            'msg' => '修改失败'
        ]);
    }

}

