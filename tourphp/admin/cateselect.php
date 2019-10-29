<?php
    require '../lib/db.php';
    $sql = "select * from category order by num desc";
    $res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/cateselect.html';