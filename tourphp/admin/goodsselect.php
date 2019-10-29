<?php
//展示页面，获取数据
require '../lib/db.php';
$sql = "select goods.*,category.* from goods left join category on goods.cid =category.num ";
$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);



require '../view/admin/goodsselect.html';