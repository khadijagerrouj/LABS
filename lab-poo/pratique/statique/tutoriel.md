# Méthodes et propriétés statiques

## Objectif

Partager une donnée entre toutes les instances d'une classe et consulter cette donnée sans créer une nouvelle instance.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/statique/index.php`

## Lecture de l'exemple

1. `private static int $nombre = 0` déclare une propriété de classe partagée par toutes les instances de `CompteurVisites`.
2. `enregistrer()` incrémente cette propriété avec `self::$nombre`. Le mot-clé `self` désigne la classe où la méthode est définie.
3. `public static function total()` est une méthode statique : elle peut être appelée avec `CompteurVisites::total()` sans objet.
4. Le script crée deux objets et enregistre trois visites au total. Chaque appel modifie la même propriété statique.
5. L'appel statique final affiche la valeur partagée, soit `3`.

## Résultat attendu

```text
Visites enregistrées : 3
```

## Lien avec un projet

Un membre statique appartient à la classe plutôt qu'à une instance. Un compteur en mémoire ne constitue toutefois pas un stockage durable : sa valeur revient à zéro au prochain lancement du script.

## Limite et exercice

Les compteurs statiques peuvent compliquer les tests s'ils conservent un état inattendu. Ajouter une méthode de remise à zéro, puis comparer ce comportement à un compteur stocké dans un objet.
