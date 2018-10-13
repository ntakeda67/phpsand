<?php
echo "---代入と式の評価", PHP_EOL;
echo "-- <- int", PHP_EOL;
var_dump($a = 10);
var_dump($a = 11);

echo "-- <- bool", PHP_EOL;
var_dump($a = true);
var_dump($a = false);

echo "-- bool equality", PHP_EOL;
var_dump($a == true);
var_dump($a == false);

echo "-- bool-int equality with implicit cast", PHP_EOL;
var_dump($a == 1);
var_dump($a == 0);

echo "-- bool-int strict equality", PHP_EOL;
var_dump($a === 1);
var_dump($a === 0);

echo "--- compare", PHP_EOL;
var_dump(1 == 1);
var_dump(1 === 1);
var_dump(1 < 1);
var_dump(1 <= 1);
echo "-- int-float", PHP_EOL;
var_dump(1 == 1.0);
var_dump(1 === 1.0);
var_dump(1 < 1.0);
var_dump(1 <= 1.0);
echo "-- int-float strictly ", PHP_EOL;
var_dump(1 === 1.0);
//var_dump(1 <== 1.0); // 存在しない演算子

?>
