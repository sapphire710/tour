<?php

$id=$_GET;
$id=$id['id'];
require '../lib/db.php';

$sql="select * from news where id<$id order by id desc limit 0,1";
$all = $mysql->query($sql)->fetch_assoc();

$detailsstr1="";
$detailsstr2="";

if($all){
    $detailsstr1="<a href='newschild.php?id={$all['id']}'>{$all['ntitle']}</a>";
}else {
    $detailsstr1="<a>没有啦</a>";
}

$sqll="select * from news where id>$id order by id asc limit 0,1";
$alll = $mysql->query($sqll)->fetch_assoc();
$detailsstr2="";
if($alll){
    $detailsstr2="<a href='newschild.php?id={$alll['id']}'>{$alll['ntitle']}</a>";
}else {
    $detailsstr2="<a>没有啦</a>";
}



require 'header.php';
require '../view/index/Newschild.html';