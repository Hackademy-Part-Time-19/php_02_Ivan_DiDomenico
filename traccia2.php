<?php

$array = [2,4,5,7,9,8,22,40];
$somma = 0;

for($i=0;$i<count($array);$i++){
    if(($array[$i]%2)==0){$somma+=$array[$i];}
}

echo "La media dei numeri è: ".$somma/count($array);