<?php
class base{

    function __construct(){
        echo "constructor called\n";
    }
        final function finalx(){
        echo "final\n";
    }

    function disp(){
        echo  "disp\n";
    }
    function __destruct(){
        echo "bye\n";
    }

}

class child extends base{
    function disp(){
        echo "disp over\n";
    }
}

$obj  = new base();

$obj->disp()

?>