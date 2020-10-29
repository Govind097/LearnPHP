<?php
trait lav{
    public function hello(){
        echo "hello developers ", "<br>";
    }
    public function hii(){
        echo "Hii developers", "<br>";
    }
}
trait prilav{
    public function priLav(){
        echo "hello Prilav", "<br>";
    }
}
class Kush{
    use lav,priLav;
}
class lavakush{
    use lav,prilav;
}
$test = new kush();
$test->hello();
$test->hii();
$test->priLav();
$test2 = new lavakush();
$test2->hello();
$test2->hii();
$test2->priLav();
?>