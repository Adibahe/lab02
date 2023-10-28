<?php 

include("../app/file2.php");

echo Company\myproject\sayhello(); //function calling
echo "<br>";
echo Company\myproject\sayhello();
echo Company\myproject\sayhello();
echo "<br>";

use Company\myproject\person;
$person1=new person(); // making objects of person in file2.php.
echo $person1->getname(); // calling function in person by person1 object.