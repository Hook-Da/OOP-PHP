<?php

 $onid = 'sdsfdf-34f43rf-fe4re43r';
echo '<pre>';
 $arr = $onid;

$arr = explode(",",$arr);
var_dump(count($arr));
if(count($arr)===1){
	$arr[] = $onid;
}
$str = '';
if(!$str){
	echo 'here';
}
var_dump($arr);
var_dump(implode(',',$arr));

/* if(!in_array($onid, $arr)){
 	$arr[] = $onid;
 }*/
