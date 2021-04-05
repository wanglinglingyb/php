<?php
$host='127.0.0.1';
$user='root';
$pass='root';
$dbname='xscj';
class my extends mysqli{
	public function __construct($host,$user,$pass,$dbname){
		@parent::__construct($host,$user,$pass,$dbname);
		if($mysqli->connect_error){
			die('数据库连接错误');
		}
		$this->set_charset('utf8');
	}
}
$mysqli=new my($host,$user,$pass,$dbname);