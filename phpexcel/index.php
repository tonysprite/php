<?php

include "./excel_help.php";
$title=array(
	"姓名",
	"密码",
);
$data = array(
	0=>array(0=>"name1",1=>"pwd1"),
	1=>array(0=>"name2",1=>"pwd2"),
	2=>array(0=>"name3",1=>"pwd3"),
	3=>array(0=>"name4",1=>"pwd4"),
);
$model = new excel_help();
$model->exportexcel($data,$title,$filename='report');

