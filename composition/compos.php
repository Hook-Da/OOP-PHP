<?php 
abstract class Lesson
{
	private $duration;
	public $costStrategy;
	function __construct($duration,Coststrategy $strategy)
	{
		$this->duration = $duration;
		$this->costStrategy = $strategy;
		//var_dump($strategy);die();
	}
	public function cost()
	{
		return $this->costStrategy->cost($this);
	}
	public function getDuration()
	{
		return $this->duration;
	}
}
class Lecture extends Lesson{}
class Seminar extends Lesson{}

abstract class CostStrategy 
{
	abstract function cost(Lesson $lessons);
	abstract function chargeType();
}
class TimeCostStrategy extends CostStrategy
{
	public function cost(Lesson $lesson)
	{
		return $lesson->getDuration()*5;
	}
	public function chargeType()
	{
		return "Почасовая оплата";
	}
}
class FixedCostStrategy extends Coststrategy
{
	public function cost(Lesson $lesson)
	{
		return 30;
	}
	public function chargeType()
	{
		return "Фиксированная ставка";
	}
}
$lessons[] = new Seminar(4,new TimeCostStrategy);
$lessons[] = new Lecture(4,new FixedCostStrategy);
foreach ($lessons as $lesson) {
	/*echo '<pre>';
	var_dump(get_class_methods($lesson));*/
	echo "Плата за занятие ".$lesson->cost().'<br/>';
	echo "Тип оплаты ".$lesson->costStrategy->chargeType().'<br/>';
	//echo "Тип оплаты $lesson->chargeType() <br/>";
}