<?php
echo '<pre>';

$arr = [2=>'Hook Banner',67=>'Robert reynolds'];
$keys = array_keys($arr);

$computed = array_map(function($id,$value)
{
	return ['id'=>$id,'name'=>$value];
},$keys,$arr);

$computed2 = [];
foreach($arr as $key=>$name)
{
	$computed2[] = ['key'=>$key,'name'=>$name];
}

print_r($computed);
print_r($computed2);
?>