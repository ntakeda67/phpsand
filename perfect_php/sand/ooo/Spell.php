<?php

class Spell
{
    private $effect;
    private $power;

    public function __construct(string $effect, int $power)
    {
        $this->effect = $effect;
        $this->power = $power;
    }

    public function fire(float $rate)
    {
        return $this->effect . " with " . $this->power * $rate . " power";
    }
}

?>
