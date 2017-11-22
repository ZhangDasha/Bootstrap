<?php 
	$conn = mysqli_connect("localhost","root","root") or die("连接数据库失败!");
	mysqli_select_bd($conn,"students") or die("未找到表项！");
	//指定数据库字符集
	mysqli_query($conn,"set names utf8");

	date_default_timezone_set("PRC");

	header("Content-type:text/html;charset=utf-8");

?>