<?php

$string = "lovely professional university";

$string = explode(" ",$string);

for($k=0;$k<3;$k++){

$str = str_split($string[$k]);
$count = count($str);

for($i=0;$i<$count;$i++){
for($j=$i+1;$j<$count;$j++){

    if($str[$i] > $str[$j]){
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
            }
        }
    }

$string[$k] = implode($str);
}
$string = implode($string," ");
echo $string;
?>