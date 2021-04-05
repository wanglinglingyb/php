<?php
function douhao1($str){
	return str_replace(',','&#44',$str);//把英文逗号替换成英文逗号的字符实体
}
	if (isset($_POST['title'])&& $_POST['title'] !='' && isset($_POST['author']) && $_POST['author'] !='' && isset($_POST['content']) && $_POST['content'] !='') {//信息提供完整
		$title=douhao1($_POST['title']);
		$author=douhao1($_POST['author']);
		$time=time();// $time=date('Y-m-d H:i:s');
		$content=douhao1($_POST['content']);
		$ip=$_SERVER['REMOTE_ADDR'];//访客的IP
		$str="$title,$author,$time,$content,$ip\n";
		$fp=fopen('lyb.txt','a');
		fwrite($fp,$str);
		fclose($fp);
		header('location:index.php');//跳转到Index。php文件
		exit;
	}else{
		header('location:1.html');
		exit;
	}