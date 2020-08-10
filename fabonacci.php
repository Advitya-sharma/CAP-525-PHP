<?php 
$a = 0;
$b = 1;
$c = 1;

echo 0 ," ",1," ";

for($i=1;$i<=10;$i++){
    echo $a+$b," ";
    $a = $b;
    $b = $c;
    $c = $a+$b;
}

?>