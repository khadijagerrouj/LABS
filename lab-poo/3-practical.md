# Pratique détaillée

## Préparer l'environnement

Depuis le dossier `lab-poo`, vérifier que PHP 8.0 ou ultérieur est disponible :

```bash
php -v
```

Les exemples sont autonomes; Composer n'est pas nécessaire.

## Quick Start : Hello World

```bash
php pratique/hello-world/index.php
```

Résultat attendu :

```text
Bonjour, monde !
```

## Exécuter les exemples

Lancer chaque commande depuis `lab-poo`. Chaque exemple possède un tutoriel décrivant son code et son résultat.

| Notion | Commande | Tutoriel |
| --- | --- | --- |
| Classe abstraite | `php pratique/classe-abstraite/index.php` | [Tutoriel](./pratique/classe-abstraite/tutoriel.md) |
| Interface | `php pratique/interface/index.php` | [Tutoriel](./pratique/interface/tutoriel.md) |
| Héritage | `php pratique/heritage/index.php` | [Tutoriel](./pratique/heritage/tutoriel.md) |
| Polymorphisme | `php pratique/polymorphisme/index.php` | [Tutoriel](./pratique/polymorphisme/tutoriel.md) |
| Encapsulation | `php pratique/encapsulation/index.php` | [Tutoriel](./pratique/encapsulation/tutoriel.md) |
| Éléments statiques | `php pratique/statique/index.php` | [Tutoriel](./pratique/statique/tutoriel.md) |

## Vérifier la syntaxe

La commande suivante vérifie les sept scripts PHP depuis `lab-poo` :

```bash
find pratique -name '*.php' -print0 | xargs -0 -n1 php -l
```

Sous Windows PowerShell, utiliser :

```powershell
Get-ChildItem pratique -Filter *.php -Recurse | ForEach-Object { php -l $_.FullName }
```

## Exercices de prolongement

1. Ajouter une autre forme qui hérite de `Forme` et calcule son aire.
2. Ajouter un troisième moyen de paiement qui respecte `MoyenDePaiement`.
3. Comparer l'héritage et l'interface : dans quel cas une seule méthode de base commune est-elle suffisante ?
4. Essayer un montant invalide dans `Portefeuille` et observer l'exception.
5. Relancer le compteur statique dans deux exécutions distinctes et constater que sa valeur n'est pas persistée.

## Limites

Les classes et données sont créées en mémoire pour illustrer la syntaxe. Les exemples ne réalisent ni paiement, ni persistance, ni intégration à une application existante.
