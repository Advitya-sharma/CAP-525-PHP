<?php
$num=153;
$temp = $num;
$sum = 0;
while($temp != 0){
    $a = $temp%10;
    $sum += pow($a,3);
    $temp = floor($temp/10);   
}

if($sum == $num){
    echo "Amstrong";
}
else{
    echo "not Amstrong";
}

?>