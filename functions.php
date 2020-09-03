<?php declare(strict_types=1);

function sum(int $x,int $y,int $z=50){
    return $x+$y+$z;
}

echo "the sum is ".sum(2,3);


function add(float $a,float $b):float{
    return $a+$b;
}

echo add(1.2,3.5)
?>
