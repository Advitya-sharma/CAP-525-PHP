<?php
$arr = array("1","2","3","4","5","6","7","8","9");
array_splice($arr,-3,2);

#If length is omitted, removes everything from offset to the end of the array.
#If offset is positive then the start of the removed portion 
#is at that offset from the beginning of the input array.

print_r($arr)
?>