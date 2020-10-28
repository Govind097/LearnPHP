<?php
abstract class AbstrctClass{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    public function printOut(){
        print $this->getValue() . "<br>";
    }
}
class AB_Class1 extends AbstrctClass{
    public function getValue(){
        return "class1";
    }
    public function prefixValue($prefix){
        return "{$prefix}";
    }
}
class AB_Class2 extends AbstrctClass{
    public function getValue(){
        return "class2";
    }
    public function prefixValue($prefix){
        return "{$prefix}";
    }
} 
$class1 = new AB_Class1;
$class1->printOut();
echo $class1->prefixValue('lav');
echo "<br>";
$class2 = new AB_Class2;
$class2->printOut();
echo $class2->prefixValue('kush');
?>