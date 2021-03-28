<?php

$arr = array("Boeing", "Airbus");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_push($arr, "Masareti", "Porsche", "Mclaren", "Pacific", "Luftansa", "Qantas", "Emirates");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_pop($arr);
var_dump($arr);
echo sizeof($arr);
echo "<br>";

var_dump($arr);


?>