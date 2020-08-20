<?php

$arr = array(1,2,2,3,3);
var_dump($arr);

$arr = array(1=>2,2=>3,3=>4);

$arrMul = array(array(1=>2));

echo $arr[2]."\n";
var_dump($arr);

foreach($arr as $k=>$a){
    echo $k."->".$a."\n";
}

echo "\n";

foreach($arrMul as $arrk=>$arrv){
    foreach($arrv as $k=>$v){
        echo $k."->".$v."\n";
    } 
}

print_r (array_flip($arr));

print_r(array_search("hello",array("hello","HELLO","hi")));


?>