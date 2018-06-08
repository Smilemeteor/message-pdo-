<?php 
	header('content-type:text/html;charset=utf8');
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
	$title = $_POST['title'];
	$text = $_POST['text'];	
	$time = time();
	$sql = "INSERT INTO message (`title`,`text`,`time`) VALUES ('$title','$text','$time')";
	$res = $pdo->query($sql);
	if ($res) {
		echo "<script>alert('留言成功');parent.location.href='show.php'</script>";
	}else{
		echo "<script>alert('留言失败');parent.location.href='add.php'</script>";
	}
 ?>