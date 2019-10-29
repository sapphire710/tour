<?php

$id=$_GET;
$id=$id['gid'];

require '../lib/db.php';
$sql="select * from goods where gid<$id order by gid desc limit 0,1";
$all = $mysql->query($sql)->fetch_assoc();
$detailsstr="";
if($all){
    $detailsstr1="<a href='details.php?gid={$all['gid']}'>{$all['gname']}</a>";
}else {
    $detailsstr1="<a>没有啦</a>";
}

$sqll="select * from goods where gid>$id order by gid asc limit 0,1";
$alll = $mysql->query($sqll)->fetch_assoc();
$detailsstr2="";
if($alll){
    $detailsstr2="<a href='details.php?gid={$alll['gid']}'>{$alll['gname']}</a>";
}else {
    $detailsstr2="<a>没有啦</a>";
}



require 'header.php';
require '../view/index/xiangqing.html';