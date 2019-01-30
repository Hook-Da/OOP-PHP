<?php
class Hulk{
	function __get($property)
	{
		$method = "get{$property}";
		if(method_exists($this, $method))
		{
			return $this->$method();
		}
	}
	function getName()
		{
			return 'Hook';
		}
		function getAge()
		{
			return 'infinity';
		}
}
$hook = new Hulk();
echo '<pre>';
var_dump($hook);
echo $hook->name;