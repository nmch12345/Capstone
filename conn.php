<?php
/*****************************
*数据库连接
*****************************/

$conn = $mysql_connect("turing.slu.edu","csp_homework","P7a4H^3zHomework");
if (!$conn){
	die("连接数据库失败：" . mysql_error());
}
//mysql_select_db("test", $conn);
//字符转换，读库
//mysql_query("set character set 'gbk'");
//写库
//mysql_query("set names 'gbk'");
?>