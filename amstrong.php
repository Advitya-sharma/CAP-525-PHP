<?php
$num=372;
$temp = $num;
$sum = 0;
while($temp != 0){
    $a = $temp%10;
    $sum += pow($a,3);
    $temp /= 10;
}
echo $sum;
if($sum == $num){
    echo "Amstrong";
}
else{
    echo "not Amstrong";
}

?>