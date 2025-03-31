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



}
