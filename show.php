<?php
header("content-type:text/html;charset=utf-8");
//引入类文件
include "./db.class.php";

$pdo=Db::getPdo("mysql:host=127.0.0.1;dbname=03o",'root','root');
$res=$pdo->select("tickets");
?>
<style>
    a{
        text-decoration: none;
    }
</style>
<center>
<table width="499" height="60"  cellspacing="0" cellpadding="0">
    <tr align="center">
        <td>出发地</td>
        <td>目的地</td>
        <td>3月21</td>
        <td>3月22</td>
        <td>3月23</td>
        <td>3月24</td>
    </tr>
    <?php foreach ($res as $k=>$v) {?>
    <tr align="center">
        <td><?=$v['place']?></td>
        <td><?=$v['bourn']?></td>
        <td><?=$v['twentyone']?></td>
        <td><?=$v['twenty']?></td>
        <td><?=$v['twentythree']?></td>
        <td><?=$v['four']?></td>
    </tr>
    <?php }?>
</table>
    <a href="insert.php">添加抢票</a>
</center>