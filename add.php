<?php
header("content-type:text/html;charset=utf-8");

//引入类文件
include "./db.class.php";
//接收前台传来的值
$place=$_POST['place'];
$bourn=$_POST['bourn'];
$twentyone=$_POST['twentyone'];
$twenty=$_POST['twenty'];
$twentythree=$_POST['twentythree'];
$four=$_POST['four'];

//入库
$pdo=Db::getPdo("mysql:host=127.0.0.1;dbname=03o",'root','root');
$sql="insert into  `tickets` value('','$place','$bourn','$twentyone','$twenty','$twentythree','$four')";
$res=$pdo->add($sql);
if($res){
    echo "<script>alert('提交成功！');location.href='show.php'</script>";die;
}else{
    echo "<script>alert('提交失败！');location.href='insert.php'</script>";die;
}