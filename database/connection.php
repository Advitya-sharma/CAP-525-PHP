<?php

$link = mysqli_connect("localhost", "root", "", "test");

if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "hello\n";
}

mysqli_close($link);
?>