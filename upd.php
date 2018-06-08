<?php
header("content-type:text/html;charset=utf-8");//设置字符编码
//连接数据库 mysql_connect()    mysql错误提示：mysql_error()   错误码：mysql_errno()
@mysql_connect('127.0.0.1','root','root')or die("连接失败，错误为".mysql_error());
//选择数据库 mysql_select_db()
mysql_select_db("test");
//设置字符集 set names utf8  mysql_query()执行sql语句
mysql_query("set names utf8");
$id = $_GET['id'];
$sql = "select * from message where id=$id";
$res = mysql_query($sql);
$data = mysql_fetch_assoc($res);
//$arr = mysql_fetch_assoc($res);//mysql_fetch_row()将资源转换成索引数组    mysql_fetch_assoc()将资源转换成关联数组    mysql_fetch_array()既有关联数组又有索引数组  
?>
<meta charset='utf-8'>
<center>
<form method="post" action="upd_do.php">
	<input type='hidden' name='id' value="<?php echo $data['id']?>" />
	<table>
	<tr>
		<td>标题：</td>
		<td><input type='text' name='title' value="<?php echo $data['title']?>"></td>
	</tr>
	<tr>
		<td>内容：</td>
		<td><input type="text" name="text" value="<?php echo $data['text'] ?>"></td>
	</tr>
	<tr>
		<td><input type='submit' value='修改分类'></td>
		<td></td>
	</tr>
	</table>
</form>
</center>