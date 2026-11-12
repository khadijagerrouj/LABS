<?php

declare(strict_types=1);

class Vehicule
{
    public function __construct(protected string $marque)
    {
    }

    public function demarrer(): string
    {
        return $this->marque . ' démarre.';
    }
}

final class Voiture extends Vehicule
{
    public function klaxonner(): string
    {
        return 'La voiture ' . $this->marque . ' klaxonne.';
    }
}

$voiture = new Voiture('Dacia');
echo $voiture->demarrer() . "\n";
echo $voiture->klaxonner() . "\n";
