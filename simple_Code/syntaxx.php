<?php
class A{
    private $a="Hello Beta";
    public function AA(){
        echo $this->a;
    }
}
$test = new A();
$test->AA();
?>