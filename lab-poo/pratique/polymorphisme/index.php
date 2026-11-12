<?php

declare(strict_types=1);

interface MessageAffichable
{
    public function afficher(): string;
}

final class MessageTexte implements MessageAffichable
{
    public function __construct(private string $contenu)
    {
    }

    public function afficher(): string
    {
        return $this->contenu;
    }
}

final class MessageAvecPrefixe implements MessageAffichable
{
    public function __construct(private string $contenu)
    {
    }

    public function afficher(): string
    {
        return '[INFO] ' . $this->contenu;
    }
}

function afficherMessage(MessageAffichable $message): void
{
    echo $message->afficher() . "\n";
}

$messages = [
    new MessageTexte('Bienvenue.'),
    new MessageAvecPrefixe('Le service est prêt.'),
];

foreach ($messages as $message) {
    afficherMessage($message);
}
