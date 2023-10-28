<?php 

include("../app/file2.php");

echo sayhello(); //function calling
echo "<br>";
echo sayhello();
echo sayhello();
echo "<br>";
$person1=new person(); // making objects of person in file2.php.
echo $person1->getname(); // calling function in person by person1 object.