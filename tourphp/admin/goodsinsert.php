<?php
//商品添加页面，插入数据
$method = $_SERVER['REQUEST_METHOD'];

require '../lib/db.php';


if($method ==='GET'){
    $sql = "select * from goods order by gid desc";
    $res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

    $sel = "select * from category order by num asc";
    $select = $mysql->query($sel)->fetch_all(MYSQLI_ASSOC);

    require '../view/admin/goodsinsert.html';
}else {
    require '../lib/common.php';
    //接收数据，引用两个函数
    $data = $_POST;


    date_default_timezone_set('Asia/Shanghai');
    $data['create_time'] = date('Y-m-d h:i:s');//date格式化日期，(格式、)当前时间
    $key = joinKeys($data);
    $value = joinValues($data);



    $sql = "insert into goods ($key) values($value);";
    var_dump($sql);
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