<?php

declare(strict_types=1);

abstract class Forme
{
    abstract public function aire(): float;
}

final class Rectangle extends Forme
{
    public function __construct(
        private float $largeur,
        private float $hauteur
    ) {
    }

    public function aire(): float
    {
        return $this->largeur * $this->hauteur;
    }
}

$rectangle = new Rectangle(4, 3);
echo 'Aire du rectangle : ' . $rectangle->aire() . " cm2\n";
