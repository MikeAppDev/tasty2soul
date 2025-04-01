# Starter webpack PHP

## Pré-requis
- Avoir installé <b>PHP</b>
- Avoir installé <b>git</b>
- Avoir installé <b>npm</b>
## Installation
1. Clonez le projet sur votre machine :
```shell
$ git clone -b webpack-php ssh://git@git.webedia-group.net:8080/brand-experience/ops-skeleton.git
```
2. Renommez le dossier du starter par celui de votre projet. exemple : <b>ops-skeleton => mon-ops-2021</b>

3. Allez à la racine du projet et installez les dépendances node_modules : 
```shell
$ npm install
```
4. Builder le projet une première fois
```shell
$ npm run build:prod
```
## Utilisation
1. Pour visualiser le projet via le navigateur, entrez la commande suivante : 
```shell
$ php -S localhost:8000 -d display_errors=1 -t ./html
```
Votre projet sera visible sous l'url <b>http://localhost:8000</b>. Libre à vous d'utiliser un logiciel comme MAMP, WAMP, Docker etc.

2. Pour que vos fichiers js s'actualisent automatiquement lors d'un changement, ouvrez une autre fenêtre dans votre terminal, allez dans votre projet et lancez la commande suivante :
```shell
$ npm run watch
```
Faite usage d'un crtl + R pour visualier vos modifications via le navigateur.

## Informations 
Vous devez effectuer vos modifications front dans le dossiers <b>ressources</b> qui se trouve à la racine du projet. Concernant les modifications html, vous devez les effectuer sur le fichier <b>index.php</b> qui se trouve dans le dossier <b>html</b>. 
