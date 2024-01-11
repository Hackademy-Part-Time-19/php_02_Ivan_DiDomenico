<?php

$array_random = [];
$min = 1;
$max = 100;

for($i=0;$i<4;$i++){
    for($j=0;$j<5;$j++){
        $array_random[$i][$j]= rand($min,$max);
    }
}

var_dump($array_random);