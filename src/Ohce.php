<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{
    function process(string $word): string
    {
        $reversed = strrev($word);
        if ($word === $reversed) {
            return "$reversed\n¡Bonita palabra!";
        }

        return $reversed;
    }

}
