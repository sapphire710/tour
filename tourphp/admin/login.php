<?php
//展示登录页面、验证
//请求方式：get方式打开页面，post方式验证
//var_dump($_SERVER);
$method = $_SERVER['REQUEST_METHOD'];
if($method === 'GET' ){
    //引入登录页面、有两种方式include和require
    require '../view/admin/login.html';
}else{
    $arr = $_POST;
    $username = $arr['username'];
    $password = $arr['password'];
    $password=crypt($password,md5('qyt'));
//提取数据库中的数据
    $mysql = new mysqli('localhost', 'root', '', 'tour', '3306');
    if ($mysql->connect_error) {
        echo '数据库连接失败，失败原因' . $mysql->connect_error;
        exit();
    }
    $mysql->query('set names utf8');
    $sql = "select * from manager where username='$username'";
    $users = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    $count = count($users);
    if ($count) {
        //判断数组是否为空
        for ($i = 0; $i < $count; $i++) {
            if ($users[$i]['password'] === $password) {
                echo json_encode([
                    'code' => 200,
                    'msg' => '登录成功'
                ]);
                exit();
            }
        }
        echo json_encode([
            'code' => 404,
            'msg' => '用户名和密码不相同'
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '用户名不存在'
        ]);
    }

}