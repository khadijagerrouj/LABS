# Héritage

## Objectif

Réutiliser dans une classe spécialisée une propriété et une méthode définies par une classe de base.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/heritage/index.php`

## Lecture de l'exemple

1. `class Vehicule` définit la classe de base. Son constructeur reçoit une marque et la stocke dans `$marque`.
2. La visibilité `protected` permet à `Vehicule` et à ses classes filles d'accéder à cette propriété, mais pas au code extérieur.
3. `demarrer()` est une méthode publique héritée; elle construit un message avec la marque.
4. `final class Voiture extends Vehicule` crée une classe fille. Elle récupère le constructeur et la méthode `demarrer()`.
5. `klaxonner()` est un comportement propre à `Voiture`. L'objet créé peut donc appeler la méthode héritée et sa méthode spécifique.

## Résultat attendu

```text
Dacia démarre.
La voiture Dacia klaxonne.
```

## Lien avec un projet

L'héritage peut représenter une spécialisation réelle lorsque la classe fille peut être utilisée comme la classe de base. Cette démonstration est autonome et n'utilise aucun modèle du projet technique.

## Limite et exercice

Un arbre d'héritage trop profond devient difficile à faire évoluer. Ajouter une classe `Moto` et déterminer si elle peut réellement réutiliser le comportement de `Vehicule`.
