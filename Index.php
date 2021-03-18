<?php


class Index
{

    public $z1;

    public $z2;

    public function sum($a, $b)
    {
     $this->z1 += $a;
    $this->z2 += $b;
    }

    public function minus($a, $b)
    {
        $this->z1 -= $a;
        $this->z2 -= $b;
    }
    public function multiply($a, $b)
    {
     $this->z1 *= $a;
    $this->z2 *= $b;
    }

    public function share($a, $b)
    {
        $this->z1 /= $a;
        $this->z2 /= $b;
    }
}

$index = new Index();

$index->z1 = 100;

$index->z2 = 8;

$index->sum(14.3,97);

echo "({$index->z1}, {$index->z2}).<br>";

$index->z1 = 6;
$index->z2 = 10;

$index->minus(15,43);

echo "({$index->z1}, {$index->z2}).<br>";

$index->z1 = 5;
$index->z2 = 10;

$index->multiply(10,40);

echo "({$index->z1}, {$index->z2}).<br>";

$index->z1 = 15;
$index->z2 = 100;

$index->share(20,23);

echo "({$index->z1}, {$index->z2}).<br>";