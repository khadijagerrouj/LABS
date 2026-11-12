<?php

declare(strict_types=1);

interface MoyenDePaiement
{
    public function payer(float $montant): string;
}

final class PaiementCarte implements MoyenDePaiement
{
    public function payer(float $montant): string
    {
        return 'Paiement par carte : ' . number_format($montant, 2, ',', ' ') . ' EUR';
    }
}

final class PaiementEspeces implements MoyenDePaiement
{
    public function payer(float $montant): string
    {
        return 'Paiement en espèces : ' . number_format($montant, 2, ',', ' ') . ' EUR';
    }
}

$carte = new PaiementCarte();
$especes = new PaiementEspeces();

echo $carte->payer(25.50) . "\n";
echo $especes->payer(12.00) . "\n";
