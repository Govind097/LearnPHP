<?php
interface Person{
     public function personName();
}
class PersonOne implements Person{
    public function personName(){
        echo "Lavakush Giri" . "<br>";
    }
}
class PersonTwo implements Person{
    public function personName(){
        echo "Govind Kumar Gupta " . "<br>";
    }
}
class PersonThree implements Person{
    public function personName(){
        echo "Devbrat chauhan ji" . "<br>";
    }
}
class PersonFour implements Person{
    public function personName(){
        echo "Neeraj Giri" . "<br>";
    }
}
class PersonFive implements Person{
    public function personName(){
        echo "Vivek Tiwari";
    }
}
$class1 = new PersonOne();
$class2 = new PersonTwo();
$class3 = new PersonThree();
$class4 = new PersonFour();
$class5 = new PersonFive();
$Person = array($class1, $class2,$class3,$class4,$class5);
foreach($Person as $Person){
    $Person->personName();
}
?>