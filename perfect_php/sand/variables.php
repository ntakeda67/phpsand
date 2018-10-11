<?php

echo "----int ", PHP_EOL;
echo PHP_INT_SIZE, PHP_EOL; // > 8
echo PHP_INT_MAX, PHP_EOL; // > 9223372036854775807
echo -1, ',',  +1, ',', +0, ',', -0, PHP_EOL;
echo 0x01, PHP_EOL;
echo 0x10, ', ', 16, ', ',0x10 == 16, ', ', 0x10 == 15,  PHP_EOL;


echo "----int cast", PHP_EOL;
echo intval("1"), PHP_EOL;         // 1
echo intval(1), PHP_EOL;           // 1
echo intval(1/1), PHP_EOL;         // 1
echo intval(1*1), PHP_EOL;         // 1
echo intval(1*0.9999), PHP_EOL;    // 0
echo intval(null), PHP_EOL;        // 0
echo intval(NAN), PHP_EOL;         // 0


echo intval("-1"), PHP_EOL;         // -1
echo intval(-1), PHP_EOL;           // -1
echo intval(-1/1), PHP_EOL;         // -1
echo intval(-1*1), PHP_EOL;         // -1
echo intval(-1*0.9999), PHP_EOL;    //  0
echo intval(null), PHP_EOL;         //  0
echo intval(NAN), PHP_EOL;          //  0

echo "---- string extensible", PHP_EOL;
$yourName = 'Go';

echo "$yourName is God.", PHP_EOL;
echo '$yourName is God.', PHP_EOL;

echo "$yourNameIsGod.", PHP_EOL;
echo '$yourNameIsGod.', PHP_EOL;

$yourNames = 'Goes';
echo "$yourNames is God.", PHP_EOL;
echo '$yourNames is God.', PHP_EOL;

$yourFullName = "$yourName Hiromi";
echo "$yourFullName.", PHP_EOL;
echo '$yourFullName', PHP_EOL;
// 影響なし。即時展開
$yourName = 'GOGO';
echo "$yourFullName.", PHP_EOL;
echo '$yourFullName', PHP_EOL;

$title = "[LIPSUM]";
echo <<<EOF
heredoc
$title 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
EOF;

echo <<<'EOF'
Nowdoc
$title 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
EOF;

echo "---- bool", PHP_EOL;

echo var_export(true, true), PHP_EOL;
echo var_export(false, true), PHP_EOL;
echo var_export((bool)true, true), PHP_EOL;
echo var_export((bool)false, true), PHP_EOL;


echo "NAN: ", var_export((bool)NAN, true), PHP_EOL;
echo "null: ", var_export((bool)null, true), PHP_EOL;


echo "int 0: ", var_export((bool)0, true), PHP_EOL;
echo "float 0.0: ", var_export((bool)0.0, true), PHP_EOL;
echo "str 0: ", var_export((bool)"0", true), PHP_EOL;

echo "int 1: ", var_export((bool)1, true), PHP_EOL;
echo "float 1.0: ", var_export((bool)1.0, true), PHP_EOL;
echo "str 1: ", var_export((bool)"1", true), PHP_EOL;

echo "NAN: ", var_export((int)NAN, true), PHP_EOL;
var_dump(NAN);
?>
