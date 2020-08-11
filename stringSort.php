<?php

$string = "lovely professional university";

$string = explode(" ",$string);

for($k = 0;$k<3;$k++){

$str = str_split($string[$k]);
print_r($str);

for($i=0;$i<count($str);$i++){
echo $str[$i];
}

$count = count($str);

for($i=0;$i<$count;$i++){
for($j=$i+1;$j<$count;$j++){
    //echo $str[$i],$str[$j];
    if($str[$i] > $str[$j]){
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }

}
}

$string[$k] = implode($str);
}

print_r($string);
echo "\n";
?>