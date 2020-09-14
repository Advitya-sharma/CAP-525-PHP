<?php
class base{

    private $a = "a";
    protected $b = "a";
    const constant = 12;
    
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
        $a = $this->a;
        $b = $this->b;
        echo $a."\n";
        echo $b."\n";
        echo base::constant."\n";
        echo "disp over\n";
    }

    // function finalx(){
    //     echo "overriding finalx \n";
    // } //error cannot override final
}

$obj  = new child();

$obj->disp()

?>