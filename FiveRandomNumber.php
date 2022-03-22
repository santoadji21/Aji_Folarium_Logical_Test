<?php
$len = 5;   // total number of numbers
$min = 1;  // minimum
$max = 100;  // maximum
$range = []; // initialize array
foreach (range(0, $len - 1) as $i) {
    while(in_array($num = mt_rand($min, $max), $range));
    $range[] = $num;
    // echo "Num Is \n";
    // echo $num." ";
  if ($num > 80) {
  echo $num. "“Luar Biasa” \n";
  } elseif ($num > 70 && $num <= 80) {
  echo $num. "“Baik” \n";
  } elseif ($num > 60 && $num <= 70)  {
  echo $num. "“Cukup” \n";
  } elseif ($num <= 60){
    echo $num. "“Kurang”\n";
  }
    // echo array_sum($range);
}
// print_r($range);