<?php
$file = $_FILES["file"];//接收前台传过来的文件
/*name=>'名字'、type=>image/png、临时路径tmp_name=>''、error=>转态码 0、size=>12345 B大小*/
//tmp_name ->uploads/20190927/xxx.png//新建文件夹存放图片，如果有文件夹则移动图片，没有则创建
if(!is_dir('../uploads')){//判断目录是否存在
    mkdir('../uploads');//创建目录
}
$date = date('Y-m-d');//创建日期文件夹
if(!is_dir('../uploads/'.$date)){//判断
    mkdir('../uploads/'.$date);//创建
}
//防止两个人传的图名称重复，需要用时间戳+随机数命名
$imgname = time().mt_rand(0,10000);
//$ext = substr($file['type'],6);//1、image/png截取扩展名
$ext = explode('/',$file['type']);//2、image/png截取扩展名
$ext = array_pop($ext);
//先将字符串转为数组，利用pop删除最后一个元素，返回删除的元素
$imgname .= '.'.$ext;
$movepath = '../uploads/'.$date.'/'.$imgname;
$result = move_uploaded_file($file['tmp_name'],$movepath);//移动文件

$webpath = '/tourphp/uploads/'.$date.'/'.$imgname;
//返回路径,得返回绝对路径（后台操作是相对路径，前台访问后台的用绝对路径）
if($result){
    echo json_encode([
        'code'=>200,
        'msg'=>'图片上传成功',
        'src'=>$webpath,
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'图片上传失败',
    ]);
}
