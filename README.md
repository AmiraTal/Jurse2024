<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants sur votre système :

### MySQL

- Installer MySQL et créer une base de données nommée `jurse2025`.
- [Télécharger MySQL](https://dev.mysql.com/downloads/mysql/)

### PHP

- Installer PHP 8.2.14.
- Vous pouvez télécharger PHP depuis [le site officiel de PHP](https://www.php.net/downloads.php).
- Ajouter PHP à votre variable d'environnement `PATH`, par exemple : `C:\php-8.2.14`.

### Composer

- Installer Composer, un gestionnaire de dépendances pour PHP.
- Télécharger et suivre les instructions d'installation
  sur [le site officiel de Composer](https://getcomposer.org/download/).
- Lors de l'installation de Composer, choisir `C:\php-8.2.14\php.exe` comme exécutable PHP.

### Node.js et npm

- Installer Node.js v18.18.0, qui inclut npm.
- Télécharger Node.js depuis [le site officiel de Node.js](https://nodejs.org/).
- npm (Node Package Manager) sera installé avec Node.js.

## Installation

Après avoir installé les prérequis ci-dessus, suivez ces étapes pour configurer l'application :

1. Ouvrir le projet, puis lancer les commandes suivantes dans l'invite de commande :

```
composer update
npm install
```

2. Ouvrir votre base de données MySQL.
3. Dans l'invite de commande, exécuter :

```
php artisan migrate
php artisan db:seed --class Database\Seeders\DatabaseSeeder
```

4. Pour démarrer le serveur, exécuter :

```
php artisan serve
```

Dans une autre invite de commande, exécuter :

```
npm run dev
```

## Accès Administrateur

Pour accéder à l'interface d'administration, suivez ces étapes :

1. Aller à la page d'inscription et cliquer sur "J'ai déjà un compte".
2. Utiliser les identifiants suivants :

- Email : `admin@example.com`
- Mot de passe : `123456789`

3. Ouvrir [http://localhost:8000/](http://localhost:8000/) dans votre navigateur.

Profitez de l'application !

