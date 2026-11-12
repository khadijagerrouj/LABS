---
marp: true
theme: default
paginate: true
size: 16:9
---

# Lab 05 — Approfondir la POO en PHP

**Présenté par :** Khadija Gerrouj  
**Encadré par :** Essarraj Fouad

<img src="./images/ofppt-logo.png" alt="Logo OFPPT" width="145"> <img src="./images/solicode-logo.png" alt="Logo Solicode" width="145">

---

# Plan

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

# Introduction & Stack Technique

Ce lab complète l'étude de la programmation orientée objet en PHP par six exemples exécutables et indépendants.

- PHP 8.0 ou ultérieur
- Terminal
- Aucun framework ni dépendance externe

---

# Quick Start

Depuis le dossier `lab-poo` :

```bash
php -v
php pratique/hello-world/index.php
```

Résultat :

```text
Bonjour, monde !
```

---

# Définitions — Abstraction et contrat

**Classe abstraite** : base non instanciable qui peut imposer des méthodes aux classes concrètes.

**Interface** : contrat de méthodes que les classes implémentantes doivent respecter.

---

# Définitions — Réutilisation et état

**Héritage** : une classe fille reprend les comportements accessibles de sa classe mère.

**Polymorphisme** : des objets différents répondent au même contrat, chacun avec son implémentation.

**Encapsulation** : l'état d'un objet est protégé et modifié par des opérations contrôlées.

**Membres statiques** : propriétés et méthodes associées à la classe plutôt qu'à une instance.

---

# Problème

> Quel problème concret rencontrez-vous ?

**À compléter par l'étudiant.** Le README du lab indique que les six notions de POO listées ne sont pas encore étudiées dans les tutoriels; aucun problème vécu précis n'a été fourni.

---

# Solution

> Quelle solution proposez-vous ?

**À compléter par l'étudiant.** Le besoin technique décrit dans le README est travaillé au moyen d'exemples autonomes, un par notion. Cette démarche pédagogique ne prétend pas résoudre un problème métier non précisé.

---

# Solution — Classe abstraite et interface

```bash
php pratique/classe-abstraite/index.php
php pratique/interface/index.php
```

Le premier script calcule l'aire d'un rectangle à partir d'une classe abstraite. Le second montre deux implémentations d'un contrat de paiement simulé.

---

# Solution — Héritage et polymorphisme

```bash
php pratique/heritage/index.php
php pratique/polymorphisme/index.php
```

Une voiture réutilise le comportement d'un véhicule. Deux types de messages sont affichés par la même fonction grâce à un contrat commun.

---

# Solution — Encapsulation et statique

```bash
php pratique/encapsulation/index.php
php pratique/statique/index.php
```

Le portefeuille protège son solde et le modifie par une méthode contrôlée. Le compteur partage une propriété entre plusieurs instances.

---

# Livrable

Six scripts indépendants, leurs tutoriels pas à pas et un guide pratique regroupent les commandes, les résultats attendus et les exercices de prolongement.
