<?php

class DummyPartyGenerator
{
    public static function generateNovice()
    {
        return new NoviceCaster();
    }

    public static function generateNormal()
    {
        return new NormalCaster();
    }
}

?>
