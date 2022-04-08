<?php
//single inheritance
// class A {
//     public static function printItem($string) {
//         echo ' Hi : ' . $string; 
//     } 
//     public function printPHP() {
//         echo 'I am from valuebound' . PHP_EOL;
//     }
// }
// class B extends A {
    
//     public function printPHP() {
//             echo "I am from ABC";
//         }
// }
// $a = new A();
// $b = new B();
// $a->printItem('Raju');
// $a->printPHP();       
// B::printItem('savan'); 
// $b->printPHP();


// /* Use static function as a counter */
  
// class solution {
      
//     static $count;
      
//     public static function getCount() {
//         return self::$count++;
//     }
// }
  
// solution::$count = 1;
  
// for($i = 0; $i < 5; ++$i) {
//     echo 'The next value is: '. 
//     solution::getCount() . "\n";
// }

// solution::$count = 3;
  
// for($i = 0; $i < 12; ++$i) {
//     echo 'The next value is: '. 
//     solution::getCount() . "\n";
// }

 
// class GFG {
//     function print() {
//         echo 'Parent Class';
//     }
 
//     function bar() {
//         static::print();
//     }
// }
 
// class Child extends GFG {
//     function print() {
//         echo 'Child Class';
//     }
// }
 
// $parent = new Child();
// $parent->bar();



// class GFG1 {
      
      
//     public function __call($name, $arguments) {
          
//         echo "Calling object method '$name' "
//             . implode(', ', $arguments). "\n";
//     }
  
      
//     public static function __callStatic($name, $arguments) {
          
//         echo "Calling static method '$name' "
//             . implode(', ', $arguments). "\n";
//     }
// }
  
// // Create new object
// $obj = new GFG1;
  
// $obj->runTest('in object context');
  
// GFG1::runTest('in static context'); 

// //interface
// interface A {
//     public function setProperty($x);
//     public function description();
// }
// class Mangoes implements A {
//    public function setProperty($x) {
//         $this->x = $x;
//     }
//     public function description() {
//         echo 'Describing' . $this->x . 'tree';
//   }
// }
// $Mango = new Mangoes();
// $Mango->setProperty('mango');
// $Mango->description();


// abstract class myParentClass{
    
//     function test_child()
//   {
//     $this->test1();
//   }
//   abstract function test1();
  
// }
// class Child1 extends myParentClass{
//     function test1(){
//         echo 'I am the child method!';
//     }
// }

// $test = new Child1();
// $test->test_child();



// class A{
//     public  function m(){
//         echo 'is it right?';
//     }
// }
// class B extends A{

//     public function test(){
//         return static::m();
//     }
//     public  function other_class(){
//         return self::test();
//     }
// }

// $obj = new B;
// $obj->other_class();


class A{
    public  static function m(){
        echo 'is it right?ds';
    }
}
class B extends A{
    public static function m(){
       echo "sdfdsf";
    }
    public function test(){
        return static::m();
    }
   
}
$obj = new B;
$obj->test();