<?php
$arr=$_POST;
$slbtn = $arr['slbtn'];

require '../lib/db.php';

$sql="delete from category where id= $slbtn";
$delete = $mysql->query($sql);

    echo json_encode([
        'code' => 200,
        'msg' => '删除成功',
        'data'=> $delete,
    ]);
