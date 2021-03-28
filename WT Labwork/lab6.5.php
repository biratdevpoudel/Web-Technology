<?php

/*sorting methods of array in PHP
sort = sorts array in ascending alphabetical/numerical order*/ 

$arr = array("masareti", "porsche", "bucatti", "lamborghini", "audi", "cadillac");
sort($arr);

foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;
    echo "</br>";

}
    echo"</br>";
 

//rsort = sorts in descending order

rsort($arr);

foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;
    echo "</br>";

}
    echo "</br>";


//ksort = sorts in ascending order according to key value
$arr = array('2' => 'audi', '1' => 'bugatti', '0' => 'cadillac' );
ksort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";

//krsort = sorts in reverse order of items key value
$arr = array('2' => 'audi', '1' => 'bugatti', '0' => 'cadillac' );
krsort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";

//asort = sorts in ascending order of value
$arr = array('1' => 'porsche', '2' => 'maserati', '0' => 'lamborghini' );
asort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";

//arsort = sorts in descending order of value
$arr = array('1' => 'porsche', '2' => 'maserati', '0' => 'lamborghini' );
arsort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";
?>