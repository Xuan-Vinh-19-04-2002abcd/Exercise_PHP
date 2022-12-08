<?php
function findMax($array)
{
  $max = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($max < $array[$i]) {
      $max = $array[$i];
    }
  }
  return $max;
}


function findMin($array)
{
  $min = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($min > $array[$i]) {
      $min = $array[$i];
    }
  }
  return $min;
}

function repeatArray($array)
{

  for ($i = 0; $i < count($array); $i++) {
    $numberRepeat = $array[$i];
    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$j] == $numberRepeat) {
        echo ($array[$j]);
        break;
      }
    }
  }

}




$array = [1, 7, 10];
function removeItem($array)
{
  $index = $array[1];
  for ($i = $index; $i < count($array); $i++) {
    $array[$i] = $array[$i + 1];
  }
  return $array;
}


function addArray($mArray, $nArray)
{
  for ($i = 0; $i < count($mArray); $i++) {
    array_push($nArray, $mArray[$i]);
  }
  sortNumber($nArray);
}


function sortNumber($nArray)
{
  for ($i = 0; $i < count($nArray); $i++) {
    $min = $i;
    for ($j = $i + 1; $j < count($nArray); $j++) {
      if ($nArray[$j] < $nArray[$min]) {
        $min = $j;
      }
    }
    $tamp = $nArray[$i];
    $nArray[$i] = $nArray[$min];
    $nArray[$min] = $tamp;

  }
  return $nArray;
}



function countCharacter($string)
{
  $arrayString = str_split($string);
  $count = 0;
  for ($i = 0; $i < count($arrayString); $i++) {
    if ($arrayString[$i] != " ") {
      $count += 1;
    }
  }
  return ($count);
}

function repeatCharacter($string)
{
  $arrayString = str_split($string);
  for ($i = 0; $i < count($arrayString); $i++) {
    $numberRepeat = $arrayString[$i];
    for ($j = $i + 1; $j < count($arrayString); $j++) {
      if ($arrayString[$j] == $numberRepeat) {
        echo ($arrayString[$j]);
      }
    }
  }
}


function checkCalender($day)
{
  switch ($day) {
    case 2:
      echo "Monday";
      break;
    case 3:
      echo "Tuesday";
      break;
    case 4:
      echo "Wednesday";
      break;
    case 5:
      echo "Thursday";
      break;
    case 6:
      echo "Friday";
      break;
    case 7:
      echo "Saturday";
      break;
    case 8:
      echo "Sunday";
      break;
    default:
      echo "Invalid";
      break;
  }
}


//Tim so nguyen to 
function findPrimeNumber()
{
  $sum = 0;
  for ($i = 2; $i < 100; $i++) {
    $count = 0;
    for ($j = 2; $j < $i - 1; $j++) {
      if ($i % $j == 0) {
        $count += 1;
      }
  
    };
    if($count == 0){
      $sum += $i;
    }
  }
  return $sum;

}

function checkEmail ($email){
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email)) {
    return false;
  }
  return "ok";
}

class Caculator {

  private $praram_1; 

  private $praram_2;

  public function Caculator($a,$b) {
     $this->praram_1 = $a;
     $this->praram_2 = $b;

  }
  public function sum($a,$b){
    return $a + $b;
  }
  public function brand($a,$b){
    return $a-$b;
  }
  public function volumn($a,$b){
    return $a * $b;
  }
  public function division ($a,$b){
    return $a % $b;
  }

}
$a = new Caculator(4, 5);
echo($a->sum(4, 5))

?>