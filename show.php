<?php
include("config.php");
header('content-type: text/html; charset=utf-8');
$result = mysql_query("SELECT * FROM info ");
$stu = array();
while($row = mysql_fetch_array($result))
{

$stu[] = $row;



}

print "{allinfo : ".json_encode($stu,JSON_UNESCAPED_UNICODE)."}";



?>