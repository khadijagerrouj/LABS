<?php

declare(strict_types=1);

final class Portefeuille
{
    public function __construct(private float $solde = 0.0)
    {
    }

    public function consulterSolde(): float
    {
        return $this->solde;
    }

    public function ajouter(float $montant): void
    {
        if ($montant <= 0) {
            throw new InvalidArgumentException('Le montant doit être positif.');
        }

        $this->solde += $montant;
    }
}

$portefeuille = new Portefeuille();
$portefeuille->ajouter(50.00);
echo 'Solde : ' . number_format($portefeuille->consulterSolde(), 2, ',', ' ') . " EUR\n";
