<?php
trait HelloGeeks {
    public function geeks() {
        echo 'Hello World!';
    }
}
trait HelloGeeks1 {
    public static function get() {
        echo 'hi!';
    }
} 
class Geeksforgeeks {
    use HelloGeeks,HelloGeeks1;
    
}
  
$obj = new Geeksforgeeks();
$obj->geeks();
Geeksforgeeks::get();


interface MyInterface{ 
  
    public function examplemethod1(); 
    public function examplemethod2(); 
  
} 
  
class MyClass implements MyInterface{ 
  
    public function examplemethod1(){ 
        echo "ExampleMethod1 Called" . "\n"; 
    } 
  
    public function examplemethod2(){ 
        echo "ExampleMethod2 Called". "\n"; 
    } 
} 
  
$ob = new MyClass; 
$ob->examplemethod1(); 
$ob->examplemethod2(); 
?>