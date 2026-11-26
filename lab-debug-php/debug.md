---
marp: true
theme: default
paginate: true
size: 16:9
---

<style>
section {
  font-family: Arial, sans-serif;
  background: #ffffff;
  color: #222222;
  padding: 55px;
}

h1, h2 {
  color: #234b70;
}

h1 {
  font-size: 38px;
}

h2 {
  font-size: 30px;
}

strong {
  color: #234b70;
}

img {
  object-fit: contain;
}

.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
}

.logo-bar img {
  display: block;
}
</style>

<!-- _class: lead -->
<!-- _paginate: false -->

<div class="logo-bar">
  <img src="images/ofppt.png" width="130" alt="Logo OFPPT">
  <img src="images/solicode.png" width="130" alt="Logo Solicode">
</div>

<br><br>

# PHP DEBUGGING

### Débogage PHP avec Visual Studio Code

<br>

**Présenté par : Khadija Gerrouj**

**Encadré par : ES-Sarraj Fouad**

---

## Plan

1. Définition du Debugging
2. Outils nécessaires
3. PHP Debug dans VS Code
4. Configuration du Debugging
5. Lancer le Debugging
6. Test pratique
7. Utiliser le Debugging
8. Les éléments importants
9. Conclusion

---

## 1. Définition

Le Debugging est une méthode qui permet de :

- Détecter les erreurs.
- Comprendre leurs causes.
- Corriger le code.
- Vérifier le fonctionnement du programme.

---

## 2. Outils nécessaires

- **PHP :** exécuter le code.
- **Visual Studio Code :** écrire le code.
- **PHP Debug :** extension de VS Code.
- **Xdebug :** outil de débogage PHP.

---

## 3. Installation

### 1. PHP Debug

Dans VS Code :

- Ouvrir Extensions.
- Rechercher PHP Debug.
- Cliquer sur Install.


---

## 3. PHP Debug dans VS Code

PHP Debug est une extension qui permet de déboguer le code PHP dans Visual Studio Code.

**Installation :**

1. Ouvrir VS Code.
2. Aller dans Extensions.
3. Rechercher PHP Debug.
4. Cliquer sur Install.

---

## 4. Configuration du Debugging

Pour configurer le Debugging :

1. Ouvrir le projet PHP.
2. Aller dans Run and Debug.
3. Cliquer sur Create a launch.json file.
4. Choisir PHP.

VS Code crée le fichier `launch.json` pour configurer le Debugging.

---

## 5. Lancer le Debugging

1. Ouvrir un fichier PHP.
2. Ajouter un Breakpoint (point rouge).
3. Ouvrir Run and Debug.
4. Appuyer sur F5.
5. Observer les variables et suivre l'exécution du code.

**Important :** Xdebug doit être installé et configuré pour utiliser le Debugging PHP.

---


## 6. Test pratique

Créer un fichier `index.php` :

```php
<?php

$price = 100;
$quantity = 3;

$total = $price * $quantity;

echo $total;

?>
```

**Résultat attendu :**

```text
300
```

---

## 7. Utiliser le Debugging

1. Ouvrir `index.php`.
2. Cliquer à gauche du numéro de ligne pour ajouter un Breakpoint.
3. Ouvrir Run and Debug.
4. Appuyer sur F5.
5. Observer les variables.

---

## 8. Les éléments importants

- **Breakpoint :** arrêter le code.
- **Variables :** voir les valeurs.
- **Step Over :** passer à la ligne suivante.
- **Continue :** continuer l'exécution.
- **Debug Console :** tester des expressions.

---

<!-- _class: lead -->

# Conclusion

Le Debugging permet de détecter et corriger les erreurs PHP.

Avec Visual Studio Code et Xdebug, nous pouvons suivre l'exécution du code, comprendre les problèmes et les corriger facilement.

<br>

**Merci pour votre attention !**

