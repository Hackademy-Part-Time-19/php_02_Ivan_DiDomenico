<?php

for($i=1;$i<101;$i++){
    if(($i%3==0)&&($i%5==0)){echo "HACKADEMY\n";}
    else if($i%3==0){echo "PHP\n"; }
    else if($i%5==0){echo "JAVASCRIPT\n"; }
    else echo "$i\n";
}