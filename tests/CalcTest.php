<?php

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    function testSum()
    {
        $calc = new App\Controllers\Calc(23,19);
        $this->assertEquals(42, $calc->sum());
    }
}