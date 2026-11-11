---
marp: true
theme: default
paginate: true
size: 16:9
---

# Lab PHP
## Exceptions, namespaces et traits

**Apprenant :** [À compléter]  
**Encadrant :** [À compléter]

---

# Plan

1. Introduction et stack technique
2. Définitions des notions
3. Problème et besoin
4. Solution et démonstrations pratiques

---

# Introduction et stack technique

Ce lab explore trois mécanismes du langage PHP qui aident à structurer et fiabiliser du code : les exceptions, les namespaces et les traits.

| Outil | Rôle |
|---|---|
| PHP 8.0+ | Langage et exécution des scripts |
| VS Code | Édition du code |
| Terminal | Exécution et vérification |

Les exemples sont autonomes : ils ne dépendent ni de Laravel ni d'un autoloader Composer.

---

# Démarrage rapide

Vérifier PHP :

```bash
php -v
```

Dans `hello.php` :

```php
<?php

echo "Hello World depuis le Lab PHP !" . PHP_EOL;
```

Lancer depuis le dossier du lab :

```bash
php hello.php
```

---

# Exceptions

Une exception représente une situation qui empêche le déroulement normal d'une opération.

- `throw` signale l'exception.
- `try` encadre le code susceptible de la déclencher.
- `catch` intercepte l'exception pour afficher un message ou réagir.

**Démonstration :** le prix négatif est refusé et l'exception est traitée au point d'appel.

```bash
php examples/exceptions/exemple.php
```

---

# Namespaces

Un namespace donne un espace de noms à une classe. Deux classes peuvent ainsi porter le même nom court sans être confondues.

- `namespace` déclare l'espace de noms d'une classe.
- `use` permet d'importer un nom qualifié.

**Démonstration :** deux classes `Article` coexistent dans des namespaces distincts.

```bash
php examples/namespaces/exemple.php
```

---

# Traits

Un trait fournit des méthodes qu'une classe peut réutiliser sans hériter d'une autre classe.

- `trait` déclare le comportement partagé.
- `use` l'inclut dans une classe.

**Démonstration :** deux classes différentes utilisent la même méthode d'affichage.

```bash
php examples/traits/exemple.php
```

---

# Problème et besoin

**À compléter par l'apprenant :**

- Quel problème concret rencontrez-vous ?
- Quel besoin ce problème révèle-t-il ?
- Quel objectif souhaitez-vous atteindre ?

---

# Solution et pratique

**À compléter par l'apprenant :**

- Quelle solution proposez-vous ?
- Quelles étapes avez-vous suivies ?
- Quel exemple ou test permet de vérifier le résultat ?

Les trois scripts fournis servent de démonstrations des notions du lab. Ils sont exécutables indépendamment et ne constituent pas une intégration à une application existante.