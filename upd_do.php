<?php
$id = $_POST['id'];
$title = isset($_POST['title'])?$_POST['title']:"";
$text = isset($_POST['text'])?$_POST['text']:"";
@mysql_connect('127.0.0.1','root','root')or die("连接失败".mysql_error());
mysql_select_db("test");
mysql_query("set names utf8");
$sql = "update message set `title`='$title',`text`='$text' where id=$id";
$res = mysql_query($sql);
if($res){
	echo "<script>alert('修改成功');location.href='show.php'</script>";
}else{
	echo "修改失败".mysql_error();
	header("refresh:5;url=show.php");die;
}
?>