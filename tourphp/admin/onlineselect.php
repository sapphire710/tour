<?php

require '../lib/db.php';

$sql=" select * from online";
$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/onlineselect.html';

