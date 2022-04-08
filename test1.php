<?php
 //Connect database
//  $dbhost        = "localhost";
//  $dnname        = "my_learning";
//  $dbuser        = "root";
//  $dbpassword    = "adm@12";
//  try{  
//     $db_conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);  
//     Echo "Successfully connected with myLearning database";  
// } 
// catch(Exception $e){  
// Echo "Connection failed" . $e->getMessage();  
// }  
//create database
// //$dbhost        = "localhost";
//  $dnname        = "my_learning";
//  $dbuser        = "root";
//  $dbpassword    = "adm@12";
//  try{  
//     $db_conn = new PDO("mysql:host=$dbhost;",$dbuser,$dbpassword);  
//     $sql = "CREATE DATABASE mydb_1";
//     $db_conn->exec($sql);
//     Echo "Successfully created with myLearning database";  
// } 
// catch(Exception $e){  
// Echo "Connection failed" . $e->getMessage();  
// } 
//CREATE table
$dbhost        = "localhost";
$dbname        = "my_leaning";
$dbuser        = "root";
$dbpassword    = "adm@12";
// try{  
//    $db_conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);  
//    $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
//   $db_conn->exec($sql);
//    Echo "Successfully connected with myLearning database";  
// } 
// catch(Exception $e){  
// Echo "Connection failed" . $e->getMessage();  
// } 
date_default_timezone_set('America/Adak');
//insert 
try{  
    $db_conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);  
  echo  $date = date('Y-m-d H:i:s');
  echo  $sql = "INSERT INTO MyGuests (firstname, lastname, email,reg_date)
  VALUES ('John', 'Doe', 'john@example.com','".$date."')";
  // use exec() because no results are returned
     $db_conn->exec($sql);
   $last_id = $db_conn->lastInsertId();
    Echo "SLast id ".$last_id;  
    $row = $db_conn->query("Select * from MyGuests where id=".$last_id)->fetch();
    print_r($row);
 } 
 catch(Exception $e){  
 Echo "Connection failed" . $e->getMessage();  
 } 

//multi insert
//  try{  
//     $db_conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);

//  // begin the transaction
//  $db_conn->beginTransaction();
//  // our SQL statements
//  $db_conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('John', 'Doe', 'john@example.com')");
//  $db_conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('Mary', 'Moe', 'mary@example.com')");
//  $db_conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('Julie',  'julie@example.com')");

//  // commit the transaction
//  $db_conn->commit();
//  echo "New records created successfully";
// } catch(PDOException $e) {
//  // roll back the transaction if something failed
//  $db_conn->rollback();
//  echo "Error: " . $e->getMessage();
//}//


 ini_set('display_errors',1);
 $array = ['test'=>2,'test1' =>'tgstg'];
 var_dump($array);
 //print_r($array) ;


 function a(int $bar) {
    echo 'Received value: ' . $bar . ' ' . gettype($bar);
}

$foo = '12';

echo 'Passed value: ' . $foo . ' ' . gettype($foo);

a($foo);