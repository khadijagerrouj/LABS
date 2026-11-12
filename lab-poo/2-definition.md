# Définitions des notions

## Classe abstraite

Classe de base qui ne peut pas être instanciée directement. Elle peut déclarer des méthodes abstraites dont les classes concrètes héritières doivent fournir l'implémentation.

## Interface

Contrat qui déclare des méthodes publiques à fournir par les classes qui l'implémentent. Une classe peut implémenter plusieurs interfaces.

## Héritage

Mécanisme par lequel une classe fille (`extends`) reprend les propriétés et méthodes accessibles d'une classe mère et peut ajouter des comportements spécialisés.

## Polymorphisme

Possibilité d'appeler le même contrat sur des objets de classes différentes, chaque objet exécutant sa propre implémentation.

## Encapsulation

Organisation qui protège l'état interne d'un objet à l'aide des niveaux d'accès (`private`, `protected`, `public`) et expose des opérations contrôlées.

## Membres statiques

Propriété ou méthode associée à la classe plutôt qu'à une instance. Une propriété statique est partagée par les instances; une méthode statique s'appelle avec l'opérateur `::`.

## À distinguer

Une interface définit un contrat; une classe abstraite peut à la fois fournir du code partagé et imposer des méthodes. L'héritage décrit une relation entre classes. Le polymorphisme décrit comment du code utilise ces objets sans dépendre de leur classe concrète.
