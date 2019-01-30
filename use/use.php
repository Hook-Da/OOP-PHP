<?php 
namespace firstnamespace;
spl_autoload_register(function($class){
	require_once "$class.php";
});
use hook\hulk\Boo as boo;
class Foo
{
	public $greet = "Hello";
}
$var1 = new Foo;
$var2 = new boo;
echo $var1->greet.' '.$var2->var;