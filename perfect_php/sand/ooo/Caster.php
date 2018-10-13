<?php

abstract class Caster
{
    abstract public function cast(Spell $spell);

    public function __construct()
    {
        echo 'constructing ' . static::class  . ' instance....', PHP_EOL;
    }

    public function __destruct()
    {
        echo 'destructing ' .  static::class . ' instance....', PHP_EOL;
    }
}

?>
