<?php

class NormalCaster extends Caster
{
    public function cast(Spell $spell)
    {
        return $spell->fire(1.0);
    }
}
    

?>
