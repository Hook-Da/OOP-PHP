<?php
class firstClass{
	public $a = 10;
}
class secondClass extends firstClass{
	public $b = 20;
}
function firstFunc(firstClass $secondClassObject)
{
	echo '<pre>';
	var_dump($secondClassObject);
	echo '</pre>';
}
$secObj = new secondClass();
firstFunc($secObj);