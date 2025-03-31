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

    public function greet(string $name, int $hour): string
    {
        if ($hour >= 6 && $hour < 12)
        {
            return "¡Buenos días {$name}!";
        } elseif ($hour >= 12 && $hour < 20)
        {
            return "¡Buenas tardes {$name}!";
        } else
        {
            return "¡Buenas noches {$name}!";
        }
    }

    public function answer(string $name, string $word)
    {
        if ($word === "Stop!") {
            return "¡Adios {$name}!";
        }
        return strrev($word);
    }

}
