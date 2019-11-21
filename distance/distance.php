<?php

	function haversineGreatCircleDistance(
  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return $angle * $earthRadius;
}

function vincentyGreatCircleDistance(
  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $lonDelta = $lonTo - $lonFrom;
  $a = pow(cos($latTo) * sin($lonDelta), 2) +
    pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
  $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

  $angle = atan2(sqrt($a), $b);
  return $angle * $earthRadius;
}
//to 54.755332893731 56.010804822304
//from 54.6989865 55.9909408
//driver 54.6989869 55.9909412
echo haversineGreatCircleDistance(54.7241984,55.9407104,54.755332893731,56.010804822304);
echo '<br>';
echo haversineGreatCircleDistance(54.6934785,55.9934495,54.7355495,55.9764349);
echo '<br>';
echo vincentyGreatCircleDistance(54.6989785,55.9909495,54.755332893731,56.010804822304);
echo '<br>';
echo vincentyGreatCircleDistance(54.6934785,55.9934495,54.7355495,55.9764349);

$arr = ['3.65'=>2,'3.3453'=>5,'4.42'=>3];
$min = min(array_keys($arr));

var_dump($arr[$min]);