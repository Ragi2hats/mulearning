<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


class Calculator
{
    private $numbers = array('one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5,'six'=>6,'seven'=>7,'eight'=>8,'nine'=>9,'minus'=>'-','plus'=>'+');
    private $calculate;

    public static function init()
    {
      return new self;
    }
    public function __get($num)
    {
     
        if(array_key_exists($num,$this->numbers)) {
         $this->calculate .= $this->numbers[$num];
             
         }
         return $this;
       
    }
    public function __call($name_of_function, $m)
    {
        if(array_key_exists($name_of_function,$this->numbers)) {
           $this->calculate .= $this->numbers[$name_of_function];           
        }
        echo eval("echo $this->calculate;") ;
   //  if(is_numeric(substr($this->calculate, -1))==true)
   //       echo eval("echo ".$this->calculate.";") ;
   //  else{
   //       $this->calculate = substr($this->calculate, 0, -1);
   //       echo eval("echo ".$this->calculate.";") ;
   //    }
    }
    
}



 // Calculator::init()->one();//should return 1
 //Calculator::init()->one->one();//should return 11
 //Calculator::init()->one->plus->two();//should return 3
 //Calculator::init()->three->minus->two();//should return 1
Calculator::init()->one->one->minus->two();//should return 9
/*
Possible numbers are one, two, three, four, five, six, seven, eight and nine.
Possible operators are plus, minus
*/