<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{
    public function greet(string $name, int $hour): string
    {
        return match (true) {
            $hour >= 6 && $hour < 12 => "¡Buenos días {$name}!",
            $hour >= 12 && $hour < 20 => "¡Buenas tardes {$name}!",
            default => "¡Buenas noches {$name}!",
        };
    }

    public function process(string $name, string $word): string
    {
        if ($this->isStopCommand($word)) {
            return "¡Adios {$name}!";
        }

        return $this->reverseAndCheckPalindrome($word);
    }

    private function isStopCommand(string $word): bool
    {
        return $word === "Stop!";
    }

    private function reverseAndCheckPalindrome(string $word): string
    {
        $reversed = strrev($word);
        return $word === $reversed ? "$reversed\n¡Bonita palabra!" : $reversed;
    }
}
