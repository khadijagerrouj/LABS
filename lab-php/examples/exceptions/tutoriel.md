# Tutoriel — Gérer une exception

## Objectif

Refuser un prix invalide, signaler le problème avec une exception, puis traiter cette exception au point où le calcul est appelé.

## Fichier

[`exemple.php`](exemple.php)

## Lecture de l'exemple

1. `declare(strict_types=1)` active la vérification stricte des types scalaires dans ce fichier.
2. `calculerPrixAvecTaxe(float $prix): float` reçoit un nombre décimal et annonce qu'elle renvoie un nombre décimal.
3. Le test `$prix < 0` vérifie la règle métier choisie pour cette démonstration. Si elle échoue, `throw new InvalidArgumentException(...)` interrompt le calcul et transporte un message explicatif.
4. Pour une valeur acceptable, la fonction calcule un exemple de prix avec une taxe de 20 % et renvoie le résultat.
5. Le bloc `try` appelle la fonction. Ici, la valeur `-10` déclenche volontairement l'exception.
6. Le bloc `catch` intercepte l'`InvalidArgumentException` et affiche son message avec `getMessage()`.

## Exécution

Depuis le dossier `lab-php` :

```bash
php examples/exceptions/exemple.php
```

Sortie attendue :

```text
Erreur : Le prix ne peut pas être négatif.
```

## Lien avec un projet

La fonction est une démonstration autonome : elle n'est reliée ni à une route ni à un modèle de l'application. Dans un projet, une validation utilisateur et une frontière applicative décideraient comment présenter ou journaliser l'erreur.

## Limite et exercice

Le taux est fixé à 20 %. Modifiez la fonction pour recevoir le taux en paramètre et vérifier qu'il est compris entre 0 et 1.