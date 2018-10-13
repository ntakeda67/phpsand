<?php
$mixed = array(
     5 => 5
    ,3 => 3
    ,2 => 2
    ,1 => 1
    ,3 => 3.0
    ,2.0 => 2.0
    ,"hoge" // max+1のところにはいる模様
    ,"4" => "str4" // [4]にはいる
);
$mixed[] = 6;
//$mixed[4] = 4;
var_dump($mixed);

echo $mixed[0], PHP_EOL;
echo $mixed[1], PHP_EOL;
echo $mixed[2], PHP_EOL;
echo $mixed[3], PHP_EOL;
echo $mixed[4], PHP_EOL;
echo $mixed[5], PHP_EOL;
?>
