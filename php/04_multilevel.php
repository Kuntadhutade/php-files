<?php
class GrandParent {
    protected $name = "Predrag";
    public function sayHello(): void {
        echo "Hello from grandparent". $this->name. "<br>";
    }
}

class ParentClass extends GrandParent{
    protected function sayHi(): void {
        echo "Hi from parent". $this->name. "<br>";
    }


    public function getHi(): void {
         $this->sayHi();
    }
}

class ChildClass extends Parentclass{
    public function sayHey():void{
        echo "Hey from child <br>";
    }
}

$obj = new ChildClass();

$obj->sayHey();
$obj->getHi();
$obj->sayHello();

?>