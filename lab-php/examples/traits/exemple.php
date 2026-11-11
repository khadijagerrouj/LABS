<?php

declare(strict_types=1);

trait Affichable
{
    public function afficher(): string
    {
        return $this->type . ' : ' . $this->nom;
    }
}

final class Article
{
    use Affichable;

    private string $type = 'Article';

    public function __construct(private string $nom)
    {
    }
}

final class Auteur
{
    use Affichable;

    private string $type = 'Auteur';

    public function __construct(private string $nom)
    {
    }
}

$article = new Article('Les traits en PHP');
$auteur = new Auteur('Samira');

echo $article->afficher() . PHP_EOL;
echo $auteur->afficher() . PHP_EOL;
