# Interface

## Objectif

Définir un contrat que plusieurs moyens de paiement peuvent respecter.

## Fichiers et exécution

- Exemple : `index.php`
- Depuis le dossier `lab-poo` : `php pratique/interface/index.php`

## Lecture de l'exemple

1. `interface MoyenDePaiement` déclare une opération publique `payer(float $montant): string`. L'interface donne la signature attendue, sans fournir son comportement.
2. `PaiementCarte implements MoyenDePaiement` s'engage à fournir cette méthode. Elle prépare un texte indiquant un paiement par carte.
3. `PaiementEspeces implements MoyenDePaiement` respecte le même contrat, avec un texte propre au paiement en espèces.
4. `number_format()` présente le montant avec deux décimales et une virgule. Chaque classe choisit sa propre description.
5. Les deux objets sont créés et leur méthode `payer()` est appelée avec des montants différents.

## Résultat attendu

```text
Paiement par carte : 25,50 EUR
Paiement en espèces : 12,00 EUR
```

## Lien avec un projet

Une interface est utile quand plusieurs composants doivent offrir les mêmes opérations. Ici, les paiements sont simulés par du texte : aucune transaction réelle n'est effectuée et l'exemple n'est pas intégré à une application.

## Limite et exercice

Le contrat ne définit pas la manière de gérer un refus ou un échec de paiement. Ajouter une troisième implémentation, par exemple un paiement par virement, sans modifier l'interface.
