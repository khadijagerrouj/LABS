# Lab PHP — Gestion des exceptions, namespaces et traits

## Objectifs

Ce lab présente trois notions fondamentales de PHP :

- **Exceptions** : signaler une situation anormale avec `throw`, puis la traiter avec `try` et `catch`.
- **Namespaces** : organiser les classes et éviter les conflits de noms.
- **Traits** : partager un comportement entre plusieurs classes sans créer de relation d'héritage.

## Stack technique

| Outil | Rôle |
|---|---|
| PHP 8.0 ou supérieur | Exécuter les exemples |
| VS Code | Lire et modifier les fichiers |
| Terminal | Vérifier la version et lancer les scripts |

Aucune dépendance externe ni installation Composer n'est nécessaire. Les exemples sont autonomes et ne sont pas intégrés à une application Laravel.

## Quick Start

Vérifier que PHP est disponible :

```bash
php -v
```

Depuis le dossier `lab-php`, créer `hello.php` avec le code suivant :

```php
<?php

echo "Hello World depuis le Lab PHP !" . PHP_EOL;
```

Lancer le script :

```bash
php hello.php
```

Résultat attendu :

```text
Hello World depuis le Lab PHP !
```

## Parcours du lab

### 1. Exceptions

Le script déclenche une exception si un prix est négatif, puis la traite à la frontière de l'exécution avec `try` et `catch`.

- Exemple : [`examples/exceptions/exemple.php`](examples/exceptions/exemple.php)
- Tutoriel : [`examples/exceptions/tutoriel.md`](examples/exceptions/tutoriel.md)
- Exécution : `php examples/exceptions/exemple.php`

### 2. Namespaces

Le script place deux classes dans des espaces de noms distincts et les importe avec `use`.

- Exemple : [`examples/namespaces/exemple.php`](examples/namespaces/exemple.php)
- Tutoriel : [`examples/namespaces/tutoriel.md`](examples/namespaces/tutoriel.md)
- Exécution : `php examples/namespaces/exemple.php`

### 3. Traits

Le script partage une méthode d'affichage entre deux classes qui n'ont pas de relation d'héritage.

- Exemple : [`examples/traits/exemple.php`](examples/traits/exemple.php)
- Tutoriel : [`examples/traits/tutoriel.md`](examples/traits/tutoriel.md)
- Exécution : `php examples/traits/exemple.php`

## Vérifier la syntaxe

Depuis le dossier `lab-php`, vérifier chaque fichier sans l'exécuter :

```bash
php -l examples/exceptions/exemple.php
php -l examples/namespaces/exemple.php
php -l examples/traits/exemple.php
```

## Présentation

Le plan de présentation adapté aux notions de ce lab se trouve dans [`presentation.md`](presentation.md). Les sections décrivant un problème réel et la solution choisie par l'apprenant sont laissées à compléter, car elles dépendent de son expérience.