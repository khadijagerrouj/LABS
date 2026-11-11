# Tutoriel — Partager une méthode avec un trait

## Objectif

Réutiliser la même méthode dans deux classes différentes sans créer de classe parente commune.

## Fichier

[`exemple.php`](exemple.php)

## Lecture de l'exemple

1. `trait Affichable` déclare une méthode réutilisable, `afficher()`.
2. La méthode lit les propriétés `$type` et `$nom` de l'objet qui l'utilise et construit une chaîne descriptive.
3. `Article` et `Auteur` déclarent chacune `use Affichable;`. La méthode du trait est alors disponible dans ces deux classes.
4. Chaque classe définit ses propres propriétés `$type` et reçoit son nom par son constructeur.
5. Les appels à `afficher()` produisent une ligne pour l'article et une autre pour l'auteur.

Le trait ne crée pas de relation de type entre `Article` et `Auteur` : il fournit simplement le même comportement aux deux classes.

## Exécution

Depuis le dossier `lab-php` :

```bash
php examples/traits/exemple.php
```

Sortie attendue :

```text
Article : Les traits en PHP
Auteur : Samira
```

## Lien avec un projet

C'est une démonstration autonome qui ne dépend pas d'un framework. Le trait est pertinent ici pour illustrer un comportement partagé minime ; il n'est pas présenté comme une fonctionnalité intégrée à une application.

## Limite et exercice

Les deux classes doivent fournir les propriétés attendues par `afficher()`. Ajoutez une troisième classe compatible, puis réfléchissez à la façon de rendre ce contrat plus explicite.