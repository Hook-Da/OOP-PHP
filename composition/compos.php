<?php 
abstract class Lesson
{
	private $duration;
	private $costStrategy;
	function __construct($duration,Coststrategy $strategy)
	{
		$this->duration = $duration;
		$this->costStrategy = $strategy;
	}
	function cost()
	{
		return $this->costStrategy->cost($this);
	}
	function getDuration()
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
	function cost(Lesson $lesson)
	{
		return $lesson->getDuration()*5;
	}
	function chargeType()
	{
		return "Почасовая оплата"ж
	}
}
class FixedCostStrategy extends Coststrategy
{
	function cost(Lesson $lesson)
	{
		return 30;
	}
	function chargeType()
	{
		return "Фиксированная ставка";
	}
}
$lessons[] = new Seminar(4,new TimeCostStrategy);
$lessons[] = new Seminar(4,new FixedCostStrategy);
foreach ($lessons as $lesson) {
	echo "Плата за занятие $lesson->cost() <br/>";
	echo "Тип оплаты $lesson->chargeType() <br/>";
}