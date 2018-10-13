<?php

class NoviceCaster extends Caster
{
    public function cast(Spell $spell)
    {
        return $spell->fire(0.8);
    }
}
    

?>
