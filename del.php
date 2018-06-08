<?php
header("content-type:text/html;charset=utf-8");
$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$id = $_GET['id'];
$sql = "delete from message where id=$id";
$res = $pdo->query($sql);
if($res){
	echo "<script>alert('删除成功');location.href='show.php'</script>";
}else{
	echo "删除失败！错误为".mysql_error();
	header("refresh:5;url=show.php");die;
}
?>