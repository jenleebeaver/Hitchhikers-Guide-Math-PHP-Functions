<?php
//octal string: 8 base system of notation instead of decimal base 10.
$initial = '555';

//convert octal to decimal 
$a = octdec($initial);
echo $a;

//convert decimal(degree) to radians 
$b = deg2rad($a);
echo "\n";
echo $b;

//cosine of $b
$c = cos($b);
echo "\n";
echo $c;

//round and float 3 (round to three decimal places)
$d = round($c, 3);
echo "\n";
echo $d;

//natural log 
$e = log($d);
echo "\n";
echo $e;

//absolute value 
$f = abs($e);
echo "\n";
echo $f;

//inverse or arc cosine (value in radians)
$g = acos($f);
echo "\n";
echo $g;

//radians to degrees
$h = rad2deg($g);
echo "\n";
echo $h;

//round down 
$i = floor($h);
echo "\n";
echo $i;

$j = $i - 47;
echo "\n";
echo $j;

//OUTPUT 
// 365
// 6.3704517697793
// 0.99619469809175
// 0.996
// -0.0040080213975388
// 0.0040080213975388
// 1.5667882946663
// 89.770356674879
// 89
// 42
