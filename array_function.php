<?php
//Write a PHP script to get the largest key in an array.
 $check_Array = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",

"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",

"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",

"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",

"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;

$largest_key_len = 0;
foreach($check_Array as $key =>$each){
    if(strlen($key)>$largest_key_len){
        $largest_key_len = strlen($key);
        $largest_key = $key;
    }
   
}
echo $largest_key;


//// let's merge the two arrays into one
$arr = array('mm'=>'asds','fdsf'=>'dfds');
$arr2 = [1,2,3,4];
$merged = array_merge($arr, $arr2);
print_r($merged);

//Array map
// change a particular value of arrray
function change_arr_value($a){
 
 if($a == 5){
    return 'Dont go';
 }
 else
 return $a;
}
$a=array('ds'=>1,'ds2'=>2,'ds3'=>3,'ds4'=>4,'ds5'=>5);
print_r(array_map("change_arr_value",$a));

