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
3. Installation
4. Configuration
5. Test pratique
6. Conclusion

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

### 2. Xdebug

Télécharger depuis le site officiel :

https://xdebug.org/download

---

## 4. Configuration

Dans le fichier `php.ini`, ajouter :

```ini
zend_extension="chemin/vers/php_xdebug.dll"
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_port=9003
```

Le chemin doit correspondre à l'emplacement réel du fichier Xdebug.

---

## 5. Vérification

Dans le terminal :

```bash
php -v
```

Vérifier que Xdebug apparaît dans les informations PHP.

Ensuite, préparer `launch.json` dans VS Code avec le port `9003`.

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

