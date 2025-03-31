<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Ohce $ohce;
    protected function setUp(): void
    {
        parent::setUp();

        $this->ohce = new Ohce();
    }


    /**
     * @test
     **/
    public function givenOneWordReturnTheReverseEchoing(): void
    {
        $this->assertEquals("aloh", $this->ohce->process("hola"));
    }

    /**
     * @test
     **/
    public function givenOneWordAndReturnsSameWord(): void
    {
        $result = $this->ohce->process("oto");

        $this->assertEquals("oto\n¡Bonita palabra!", $result);
    }

    /**
     * @test
     **/
    public function givenOneNameAndTheHourReturnsBuenosDias(): void
    {
        $this->assertEquals("¡Buenos días Pedro!", $this->ohce->greet("Pedro", 7));
    }

    /**
     * @test
     **/
    public function givenOneNameAndTheHourReturnsBuenasTardes(): void
    {
        $this->assertEquals("¡Buenas tardes Pedro!", $this->ohce->greet("Pedro", 15));
    }

    /**
     * @test
     **/
    public function givenOneNameAndTheHourReturnsBuenasNoches(): void
    {
        $this->assertEquals("¡Buenas noches Pedro!", $this->ohce->greet("Pedro", 22));
    }

    /**
     * @test
     **/
    public function givenStopReturnsAdiosYourName(): void
    {
        $this->assertEquals("¡Adios Pedro!", $this->ohce->answer("Pedro", "Stop!"));
    }
}
