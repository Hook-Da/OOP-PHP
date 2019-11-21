<?php 

	$str = '11.11.2019 09:00 - 17:00';

	echo $newStr1 = substr($str, 0,10);
	echo '<br/>';
	echo $newStr12 = substr($str, 10);	
	echo '<br/>';
	echo $newStr12.' '.$newStr1;
	echo '<br/>';
	$ts = strtotime('09:00'.' '.$newStr1);
	echo $ts;
	echo '<br/>';
	echo '09:00'.' '.$newStr1;
	echo '<br/>';
	echo date('H:m d.m.Y',$ts);