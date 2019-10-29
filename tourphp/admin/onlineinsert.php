<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    require '../view/index/OnlineAppointment.html';
} else {
    $data = $_POST;
    $data['odate'] = $data['datyear'] . '-' . $data['datmouth'] . '-' . $data['datdata'];
    unset($data['datyear'],$data['datmouth'],$data['datdata']);

    date_default_timezone_set('Asia/Shanghai');
    $data['create_time'] = date('Y-m-d h:i:s');//date格式化日期，(格式、)当前时间

    require '../lib/common.php';

    require '../lib/db.php';

    $key = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into online ($key) values($value)";

    $mysql->query($sql);

    if ($mysql->affected_rows > 0) {
        echo json_encode([
            'code' => 200,
            'msg' => '预约成功'
        ]);
    } else {
        echo json_encode([
            'code' => 200,
            'msg' => '预约失败'
        ]);
    }
}