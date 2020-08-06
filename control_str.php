<?php
//if

$a = 3; 
if($a >2){
    echo "more than 2 \n";
}

//if else

$a = 1;

if($a >2){
    echo "more than 2\n";
}
else{
    echo "less than 2\n";
}

//elseif

if($a >2){
    echo "more than 2\n";
}
elseif($a==1){
    echo "equal to 1\n";
}
else{
    echo "less than 2\n";
}

// switch case

switch($a){

    case 1:{
        echo "value is 1\n";
    break;
    }
    default:{
        echo "default value \n";
    break;
    }
}

//loops

//for loop

$str = "hello";

for($i=0;$i<strlen($str);$i++){
    
    echo $str[$i];
}
echo "\n";

//while loop
$i=0;
while($i<=5){
    echo $str[$i];
    $i++;
}
echo "\n";
 //do while 
$i=0;
 do{
     echo $str[$i];
        $i++;
 }while($i<=5);
echo "\n";
 //break
$i=0;
while($i<=5){
    if($str[$i] == 'o'){
    break;
    }
    echo $str[$i];
    $i++;
}
echo "\n";
 
//continue

$i=0;
while($i<=5){
    $i++;
    if($str[$i] == 'h'){
    continue;
    }
    echo $str[$i];
}
echo "\n";

for($i=0;$i<10;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}

for($i=0;$i<10;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}




?>


