<?php

namespace App\Controllers;

class Calc
{
    private int $num1;
    private int $num2;

    public function __construct(int $a, int $b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
    }

    public function sum()
    {
        return $this->num1 + $this->num2;
    }

    public function sub()
    {
        return $this->num1 - $this->num2;
    }

    public function mul()
    {
        return $this->num1 * $this->num2;
    }

    public function div()
    {
        return $this->num1 / $this->num2;
    }
}