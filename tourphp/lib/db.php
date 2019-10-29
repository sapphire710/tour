<?php
$mysql = new mysqli ('localhost', 'root', '', 'tour', '3306');
if ($mysql->connect_error) {
    echo '数据库连接失败，失败原因' . $mysql->connect_error;
    exit();
}
$mysql->query('set names utf8');