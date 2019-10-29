<?php
require  '../lib/db.php';
$sql = "select * from nav order by nsort desc";
$nav = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require  '../view/index/header.html';

//**************************************
/*exit();
//选项卡部分参考
$cate = [['id'=>0,'cname'=>'全部']];
$sql = "select * from category order by id asc";
$cate1=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
$cate = array_merge($cate,$cate1);//合并


array_filter($arr,function($v)use($id){
    return $v['cid']==$id;
});*/
