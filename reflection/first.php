<?php
class foo{
	public function someFunc()
	{

	}
	static public function secFunc(){}
}
class boo extends foo
{
	private $var;
}
$prod_class = new ReflectionClass('boo');
echo '<pre>';
Reflection::export($prod_class);