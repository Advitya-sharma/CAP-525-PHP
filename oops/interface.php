<?php

interface inter {
    public function hix();
}

class base implements inter{
    function hixx(){
        echo "hx \n";
}

}

$obj = new base();

$obj->hix();

?>