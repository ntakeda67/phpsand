<?php

//use \org\nt67\ooo\sand;

function __autoload($name)
{
    $fileName = $name . '.php';
    require_once $fileName;
}

$novice = DummyPartyGenerator::generateNovice();
$normal = DummyPartyGenerator::generateNormal();

$heal = new Spell('heal', 10);

echo $novice->cast($heal), PHP_EOL;
echo $normal->cast($heal), PHP_EOL;



?>
