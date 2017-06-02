<?php

//require '../addtask/class1/ClassWeek2.php';
//require '../addtask/class2/ClassWeek2.php';

spl_autoload_extensions(".php");
spl_autoload_register();


$obj1= new class1\ClassWeek2();
echo "\n";
$obj2= new class2\ClassWeek2();

