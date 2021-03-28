<?php

require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";
$gces->address = "Lamachaur, Pokhara";

array_push($gces->employees, new Employee("Birat", "Malepatan"));
array_push($gces->employees, new Employee("Ram", "Chandragiri"));
array_push($gces->employees, new Employee("Krishna", "Rampur"));
array_push($gces->employees, new Employee("Bikram", "Miapatan"));

var_dump ($gces);

?>