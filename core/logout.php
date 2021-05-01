<?php
// session_start();
// session_destroy();
//header('Location:/');

// $string = "1,2,3";
//   $arr = explode(",",$string);
// var_dump($arr);
// foreach($arr as $r){
//     echo $r . '<br>';
// }
$s = 0;
//  $s <= count($b); 
 
// while( $s < count($arr)){
//   echo $arr[$s] . '<br>';
//   $s++;

  
// }
// $date = date('d-m-y h:i:s');
// $timezone = date_default_timezone_set('Africa/Lagos');
// echo "The current server timezone is: " . $timezone;
// echo $date;

// $timestamp = time();
// echo($timestamp);
// echo "<br>";

// Converting timestamp to human readable format
//echo(date("F d, Y h:i:s", $timestamp));

$num = '1,2,3,4,5,6,7,8';
 $narr = explode(',', $num);
 var_dump( $narr);
$x = 1;

while($x<5){
  echo $x .'yes<br>';

  foreach($narr as $n){
    echo $n . '<br>';
    
  }
  $x++;

}













?>