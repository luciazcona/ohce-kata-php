<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function shouldAddTwoArguments()
    {
        $calculator = new Ohce();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function shouldMultiplyTwoArguments()
    {
        $calculator = new Ohce();

        $result = $calculator->multiply(1, 2);

        $this->assertEquals(2, $result);
    }
}
