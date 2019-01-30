<?php 
class Foo
{
	private static $_instance = null;
	private static $props = [];
	private function __construct()
	{

	}
	public function setProp($name,$value)
	{
		self::$props[$name] = $value;
	}
	public function getProp($name)
	{
		var_dump(self::$props);
	}
	public static function getInstance()
	{
		if(!isset(self::$_instance))
		{
			$_instance = new Foo();
		}
		return $_instance;
	}
}
$obj1 = Foo::getInstance();
$obj1->setProp('name','Hook');
unset($obj1);
echo '<strong>Unset</strong>';
$obj2 = Foo::getInstance();
$obj2->getProp('name');