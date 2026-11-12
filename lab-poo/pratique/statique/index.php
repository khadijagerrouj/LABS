<?php

declare(strict_types=1);

final class CompteurVisites
{
    private static int $nombre = 0;

    public function enregistrer(): void
    {
        self::$nombre++;
    }

    public static function total(): int
    {
        return self::$nombre;
    }
}

$pageAccueil = new CompteurVisites();
$pageContact = new CompteurVisites();
$pageAccueil->enregistrer();
$pageContact->enregistrer();
$pageContact->enregistrer();

echo 'Visites enregistrées : ' . CompteurVisites::total() . "\n";
