# Spacewich SEO Exercice - Updated for DevOps

# CI

### lint

Etape permettant de faire tourner le linter pour valider la bonne structure du code

### security-checker

Etape permettant de tester si des failles existent pour les dépendances installés dans le projet (via composer)

### phpcpd

Etape permettant de vérifier si du code dupliquée existe

### phpunit

Etape permettant de faire tourner des unités de tests >>> Ne marche pas sur la CI pour le moment, désolé :(

### validate-composer

Valide la structure du composer.json et les méta-données

### build 

Permet de builder :

- Les dépendances Yarn
- Les dépendances Composer

Permet de déployer sur les serveurs (UNIQUEMENT SUR LA BRANCHE PREPROD/PROD) :

- Les static files
- Le schema doctrine

Permet de démarrer les serveurs à travers Docker (UNIQUEMENT PREPROD/PROD)


## CD

### Architecture

![Archi Image](https://i.ibb.co/3f9GgwH/Capture.png)


# Liens des environnements

[iim-preprod.spacewich.fr](iim-preprod.spacewich.fr)
[iim-prod.spacewich.fr](iim-prod.spacewich.fr)
