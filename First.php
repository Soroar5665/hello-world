<?php
//class test{
   // public $name = "Soroar";
   // public $id = 3;
//}
//$obj1 = new test();
//echo spl_object_id($obj1);
//echo "heloworld";
// $name = "Soroar";
// function luca(){
//     global $name;
//     echo "hello " . $name . "!";
// }
// luca();
// define("SITE_NAME", "Chaldal");
// echo SITE_NAME;
class test{
    const pi=3.1416;
}
echo test::pi;
echo "<br>";
$fruits = ["apple","banana","mango"];
echo implode(",",$fruits);