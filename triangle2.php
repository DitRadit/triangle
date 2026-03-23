<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

$a = floatval($a);
$b = floatval($b);
$c = floatval($c);

if ($a <= 0 || $b <= 0 || $c <= 0){
    echo "Bukan Segitiga";
    exit;
}

$max = max($a, $b, $c);

if ($max == $a){
    $sum = $b + $c;
} else if ($max == $b){
    $sum = $a + $c;
} else {
    $sum = $a + $b;
}

if ($max >= $sum){
    echo "Bukan Segitiga";
} else if ($a == $b && $b == $c){
    echo "Equilateral Triangle";
} else if ($a == $b || $a == $c || $b == $c){
    echo "Isosceles Triangle";
} else if (    
    $a*$a + $b*$b == $c*$c ||
    $a*$a + $c*$c == $b*$b ||
    $b*$b + $c*$c == $a*$a ) {

    echo "Right Triangle";
} else {
    echo "Free Triangle";
}