<?php

use  \PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{
    public $z1;

    public $z2;

    public function testSum()
    {
        $this->z1 = 100;
        $this->z2 = 8;
        $this->z1 += 14.3;
        $this->z2 += 97;
        $this->assertIsFloat($this->z1, $this->z2);
    }

    public function testMinus(): void
    {
        $this->z1 = 100;
        $this->z2 = 8;
        $this->z1 -= 6;
        $this->z2 -= 10;
        $this->assertIsInt($this->z1, $this->z2);
    }

    public function testMultiply(): void
    {
        $this->z1 = 100;
        $this->z2 = 8;
        $this->z1 *= 6;
        $this->z2 *= 10;
        $this->assertIsInt($this->z1, $this->z2);
    }

    public function testShare()
    {
        $this->z1 = 100;
        $this->z2 = 8;
        $this->z1 /= 6;
        $this->z2 /= 10;
        $this->assertIsNumeric($this->z1, $this->z2);
    }

}
