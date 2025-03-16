# Guide Utilisateur - ENI e-Learning



## 📖 Introduction

ENI e-Learning est une application web permettant aux utilisateurs d'accéder à un large éventail de tutoriels afin d'optimiser l'utilisation du recueil d'ouvrages proposés.

### ✨ Fonctionnalités principales

- 📚 Tutoriels textuels et vidéos
- 🔍 Moteur de recherche performant
- 📱 Interface responsive et intuitive

## 👥 Auteurs

- **Karim RYSMAN**
- **Tristan AUDINOT**

---

## 🚀 Installation et Configuration

### 📌 Prérequis

Avant d'installer le projet, assurez-vous d'avoir :

- **PHP** (8.x recommandé)
- **Composer** (gestionnaire de dépendances PHP)
- **Symfony CLI** (recommandé)
- **MySQL** ou **MariaDB**
- **PHPStorm** (optionnel) avec les extensions :
  - "Symfony Support"
  - "PHP CS Fixer"

### 📥 Installation

Clonez le dépôt et installez les dépendances :

```bash
composer install
```

### ⚙️ Configuration de l'environnement

1. Dupliquez le fichier `.env` en `.env.local`.
2. Modifiez `.env.local` avec vos identifiants :

```dotenv
DATABASE_URL="mysql://VOTRE_LOGIN:PASSWORD@mysql/VOTRE_LOGIN_pharmacie?serverVersion=10.2.25-MariaDB&charset=utf8mb4"
```

3. Créez la base de données :

```bash
composer db
```

### 🖥️ Démarrage du serveur

Lancez le serveur avec :

```bash
composer start
```

Puis accédez à : [https://127.0.0.1:8000/](https://127.0.0.1:8000/)

---

## ✅ Vérifications et Qualité du Code

### 🔍 Vérification du code

```bash
composer test:phpcs  # Vérification PHP
composer test:twigcs  # Vérification Twig
composer test  # Vérification complète
```

### 🔧 Correction automatique

```bash
composer fix:phpcs  # Correction PHP
composer fix:twigcs  # Correction Twig
composer fix  # Correction complète
```

---

## 🎯 Bonnes Pratiques Git

### 📌 Structuration des commits

- Utilisez des messages clairs (`feat: ajout de la recherche avancée`).
- Respectez la convention *Conventional Commits*.

### 🌿 Gestion des branches

- Créez des branches spécifiques (`feature/nom-fonctionnalité`).
- Faites des **pull requests** avant de fusionner.

---

## 📩 Contact et Support

Pour toute question ou contribution, contactez les auteurs ou ouvrez une issue sur GitHub.

🚀 **Bon développement !**

