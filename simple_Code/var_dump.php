<?php
class A{
    private  $a= "hello govind";
    public function lav(){
        echo $this->a;
    }
}
$test = new A();
$test->lav();
var_dump($test);
?>