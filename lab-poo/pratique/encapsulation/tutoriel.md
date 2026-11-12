# Encapsulation

## Objectif

Protéger l'état d'un objet et n'autoriser sa modification qu'au travers d'une opération contrôlée.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/encapsulation/index.php`

## Lecture de l'exemple

1. `private float $solde` rend le solde accessible uniquement depuis la classe `Portefeuille`.
2. Le constructeur initialise le solde à zéro par défaut ou à la valeur fournie.
3. `consulterSolde()` expose une lecture contrôlée de cette propriété, sans permettre au code appelant de l'écraser directement.
4. `ajouter()` refuse une valeur nulle ou négative en levant `InvalidArgumentException`. Pour un montant accepté, la méthode met à jour le solde.
5. Le script ajoute 50 euros, puis lit le solde et l'affiche avec deux décimales.

## Résultat attendu

```text
Solde : 50,00 EUR
```

## Lien avec un projet

L'encapsulation aide à préserver des règles métier autour d'un état mutable. Ce portefeuille est un exemple pédagogique : il ne gère ni devise, ni persistance, ni opération bancaire réelle.

## Limite et exercice

L'exemple ne permet pas de retirer de l'argent. Ajouter une méthode `retirer()` qui refuse un montant invalide ou supérieur au solde, puis vérifier les deux cas.
