# Classe abstraite

## Objectif

Fournir un contrat commun pour les formes qui savent calculer leur aire, sans permettre de créer une forme incomplète.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/classe-abstraite/index.php`

## Lecture de l'exemple

1. `abstract class Forme` déclare une classe abstraite. Elle sert de base et ne peut pas être instanciée directement.
2. `abstract public function aire(): float` impose aux classes concrètes de fournir une méthode qui renvoie un nombre décimal.
3. `Rectangle extends Forme` hérite de cette obligation. Son constructeur reçoit la largeur et la hauteur, puis les conserve dans des propriétés privées.
4. La méthode `aire()` multiplie ces deux valeurs. La classe `Rectangle` est instanciable parce qu'elle satisfait le contrat abstrait.
5. Le script crée un rectangle de 4 par 3 et affiche la valeur retournée, soit `12 cm2`.

## Résultat attendu

```text
Aire du rectangle : 12 cm2
```

## Lien avec un projet

Une classe abstraite peut regrouper un comportement commun à plusieurs types proches, par exemple différentes formes géométriques. Cet exemple est autonome : il n'est pas branché à un modèle ni à un service d'une application.

## Limite et exercice

Le rectangle ne vérifie pas que ses dimensions sont positives. Ajouter une validation dans le constructeur, puis créer une classe `Cercle` qui implémente son propre calcul d'aire.
