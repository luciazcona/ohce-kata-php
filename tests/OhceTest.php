<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     **/
    public function givenOneWordReturnTheReverseEchoing(): void
    {
        $ohce = new Ohce();
        $result = $ohce->process("hola");

        $this->assertEquals("aloh", $result);
    }

    /**
     * @test
     **/
    public function givenOneWordAndReturnsSameWord(): void
    {
        $ohce = new Ohce();
        $result = $ohce->process("oto");

        $this->assertEquals("oto\n¡Bonita palabra!", $result);
    }

    /**
     * @test
     **/
    public function givenOneNameAndTheHourReturnsGreet(): void
    {
        $ohce = new Ohce();

        $result = $ohce->greet("Pedro", 7);

        $this->assertEquals("¡Buenos días Pedro!", $result);
    }


}
