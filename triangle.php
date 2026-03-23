<?php 
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

if ($a == $b && $b == $c){
    echo "Segitiga Sama Sisi\n";
} else if ($a == $b || $a == $c || $b == $c){
    echo "Segitiga Sama Kaki\n";
} else {
    echo "Segitiga Sembarang\n";
}

echo "\n";


$a1 = trim(fgets(STDIN));
$b1 = trim(fgets(STDIN));
$c1 = trim(fgets(STDIN));

if ($a1 + $b1 + $c1 != 180){
    echo "Segitiga Sembarang";
} else if ($a1 == 90 || $b1 == 90 || $c1 == 90){
    echo "Segitiga Siku-Siku";
} else if ($a1 > 90 || $b1 > 90 || $c1 > 90){
    echo "Segitiga Tumpul";
} else {
    echo "Segitiga Lancip";
}