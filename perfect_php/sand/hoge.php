<?php
/* numeric */
$int=1;
?>
<?php
echo '-- expression --', PHP_EOL;
echo '$int       : ' . var_export($int,   true)        . PHP_EOL;
echo '$int++     : ' . var_export($int++, true)      . PHP_EOL;
echo '$int + 2   : ' . var_export($int + 2, true)    . PHP_EOL;
echo '$int + 3   : ' . var_export($int + 3, true)    . PHP_EOL;
echo '$int + 0.1 : ' . var_export($int + 0.1, true)  . PHP_EOL;
echo '$int + 0.0 : ' . var_export($int + 0.0, true)  . PHP_EOL;
echo '$int + 0   : ' . var_export($int + 0, true)    . PHP_EOL;
echo '-            '                           . PHP_EOL;
echo '$int / 7   : ' . var_export($int / 7, true)    . PHP_EOL;
echo '$int / 3   : ' . var_export($int / 3, true)    . PHP_EOL;
echo '$int / 1   : ' . var_export($int / 1, true)    . PHP_EOL;
echo '$int / 0   : ' . var_export($int / 0, true)    . PHP_EOL;
echo '$int / 0.1 : ' . var_export($int / 0.1, true)  . PHP_EOL;
echo 'INF        : ' . var_export(INF, true)         . PHP_EOL;
echo 'INF + 1    : ' . var_export(INF + 1, true)     . PHP_EOL;
echo 'INF - 1    : ' . var_export(INF - 1, true)     . PHP_EOL;
echo 'INF - INF  : ' . var_export(INF - INF, true)   . PHP_EOL;
echo 'INF / INF  : ' . var_export(INF / INF, true)   . PHP_EOL;

echo '-- global env --';
echo $_SERVER['PWD'] . PHP_EOL;
$_SERVER['PWD']='dummy pwd' . PHP_EOL;
echo $_SERVER['PWD'];


echo '-- error control --', PHP_EOL;

trigger_error('だめです', E_USER_WARNING);
var_dump(E_USER_WARNING); // 512
echo '- after e_user_warning', PHP_EOL;

trigger_error('おきをつけください', E_USER_NOTICE);
var_dump(E_USER_NOTICE); // 1024
echo '- after e_user_notice', PHP_EOL;

trigger_error('だめだしきをつけろ', E_USER_NOTICE ^ E_USER_WARNING);
var_dump(E_USER_NOTICE ^ E_USER_WARNING ); // 1024
echo '- after e_user_notice ^ warning', PHP_EOL;

trigger_error('だめです', E_USER_ERROR);
var_dump(E_USER_ERROR);
echo '- after e_user_error', PHP_EOL; // not executed
?>
a
