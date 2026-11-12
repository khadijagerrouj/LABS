# Polymorphisme

## Objectif

Appeler le même contrat sur des objets différents et laisser chaque objet produire son comportement.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/polymorphisme/index.php`

## Lecture de l'exemple

1. `MessageAffichable` définit la méthode commune `afficher(): string`.
2. `MessageTexte` renvoie simplement son contenu; `MessageAvecPrefixe` renvoie le même type de contenu précédé de `[INFO]`.
3. La fonction `afficherMessage()` accepte un paramètre typé `MessageAffichable`. Elle ne dépend donc pas du nom précis de la classe.
4. Le tableau `$messages` contient les deux implémentations du contrat.
5. La boucle transmet chaque objet à la même fonction. PHP appelle la version de `afficher()` correspondant à la classe réelle de l'objet : c'est le polymorphisme.

## Résultat attendu

```text
Bienvenue.
[INFO] Le service est prêt.
```

## Lien avec un projet

Ce mécanisme permet à un code appelant de travailler avec plusieurs stratégies d'affichage sans tester leur classe concrète. Les messages sont ici simulés et ne proviennent pas d'un système de journalisation intégré.

## Limite et exercice

Les deux classes répètent le stockage du contenu. Ajouter un troisième type de message, puis réfléchir à la meilleure façon de partager cette donnée sans rendre le contrat trop spécifique.
