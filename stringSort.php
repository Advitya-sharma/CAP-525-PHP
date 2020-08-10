<?php

$str = str_split("lovely");
print_r($str);

for($i=0;$i<6;$i++){
echo $str[$i];
}

for($i=0;$i<6;$i++){
for($j=$i+1;$j<6;$j++){
    if($str[$i] > $str[$j]){
        $k = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $k;
    }
}
}

echo "\n";

for($i=0;$i<6;$i++){
echo $str[$i];
}

?>