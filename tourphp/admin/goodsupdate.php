<?php
/*
$arr = $_POST;
$type = $arr['type'];
$values = $arr['value'];
$id = $arr['id'];

require '../lib/db.php';
$sql="update goods set $type='$values' where gid=$id";

$update = $mysql->query($sql);

echo json_encode([
    'code' => 200,
    'msg' => '修改成功',
]);*/
//判断请求方式get
//传参用get方式，不是post的了
//查询
//fetch_all是二维数组，只接收一个数据用fetch_assoc();
//引页面
$method = $_SERVER['REQUEST_METHOD'];
require '../lib/db.php';
require  '../lib/common.php';
if($method ==='GET'){
    $id = $_GET['id'];
    $sql="select * from goods where gid=$id";
    $res = $mysql->query($sql)->fetch_assoc();
    //转出来是一维关联数组

    $sql="select * from category order by num desc";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);


    require  '../view/admin/goodsupdate.html';
}else{
    $data = $_POST;

    date_default_timezone_set('Asia/Shanghai');
    $data['create_time'] = date('Y-m-d h:i:s');//date格式化日期，(格式、)当前时间

    $gid = $data['gid'];
    unset($data['gid']);//删除gid

    $str = joinKeysValues($data);
    $sql = "update goods set $str where id=$gid;";
    $update = $mysql->query($sql);


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


