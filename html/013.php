<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$uploaddir='./uploads/';//指定文件上传目录
	if (!file_exists($uploaddir)) {
		mkdir($uploaddir);
	}
	$file=$_FILES['userfile'];
	// $info=pathinfo($file['name']);
	// print_r($info);
	// $ext=$info['extension'];
	$ext=pathinfo($file['name'],PATHINFO_EXTENSION);
	$uploadfile=$uploaddir.time().mt_rand(0,100).'.'.$ext;
	exit;
	if(move_uploaded_file($file['tmp_name'], $uploadfile)) {
		echo '文件上传成功！';
	}else{
		echo '文件上传失败!';
	}
	echo '上传文件是相关信息：<br>';
	echo '<pre>';
	print_r($_FILES['userfile']);
	echo '</pre>';
	?>
</body>
</html>