<?php
header("Content-Type:applocation/json;charset=utf-8");
if($_POST['type']=='type2'){
$type="jingdong";
}else
{ $type="taobao";}
$link=mysqli_connect('localhost','root','admin');
mysqli_select_db($link,'nokisnojok');
$sql="select * from user where type='$type'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result,MYSQL_ASSOC);

echo '{
	"success": true,
	"id": '.$row['id'].',
	"name":"'.$row['name'].'",
	"remark": "'.$row['remark'].'", 
	"status": "'.$row['status'].'",
	"createtime": "'.$row['createtime'].'",
	"logintime": "'.$row['logintime'].'",
	"type": "'.$row['type'].'"
}';

?>
