<?php

declare(strict_types=1);

function calculerPrixAvecTaxe(float $prix): float
{
    if ($prix < 0) {
        throw new InvalidArgumentException('Le prix ne peut pas être négatif.');
    }

    return $prix * 1.2;
}

try {
    $prixFinal = calculerPrixAvecTaxe(-10);
    echo 'Prix avec taxe : ' . $prixFinal . PHP_EOL;
} catch (InvalidArgumentException $exception) {
    echo 'Erreur : ' . $exception->getMessage() . PHP_EOL;
}
