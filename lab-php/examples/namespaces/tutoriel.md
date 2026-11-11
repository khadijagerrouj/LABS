# Tutoriel — Organiser des classes avec les namespaces

## Objectif

Déclarer deux classes portant le même nom court et les distinguer grâce à leurs namespaces.

## Fichier

[`exemple.php`](exemple.php)

## Lecture de l'exemple

1. `declare(strict_types=1)` demande des types stricts pour le fichier.
2. Le bloc `namespace LabPhp\Catalogue` déclare une classe `Article` associée au catalogue.
3. Le bloc `namespace LabPhp\Blog` déclare une autre classe `Article`, cette fois associée au blog. Le nom qualifié complet de chaque classe reste différent.
4. Dans l'espace global, les instructions `use ... as ...` importent les deux classes sous les alias `ArticleCatalogue` et `ArticleBlog`.
5. Les deux objets sont construits séparément ; l'appel à `titre()` montre que chaque classe fournit son propre résultat.

Les blocs de namespace sont volontairement entre accolades afin que plusieurs namespaces puissent coexister dans ce fichier d'exemple.

## Exécution

Depuis le dossier `lab-php` :

```bash
php examples/namespaces/exemple.php
```

Sortie attendue :

```text
Catalogue : Introduction aux namespaces
Blog : Organiser les classes en PHP
```

## Lien avec un projet

C'est une démonstration autonome. Elle n'utilise pas d'autoloader Composer : les deux classes sont déclarées dans le même fichier pour rendre l'exemple directement exécutable. Dans un projet, l'autoload PSR-4 peut relier les namespaces à des fichiers distincts.

## Limite et exercice

Les classes ne contiennent qu'une méthode. Déplacez chacune dans son propre fichier et configurez un autoloader PSR-4 dans un petit projet Composer.