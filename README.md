# Spacewich SEO Exercice

## Install and Use 

### Load dependencies
```bash
composer install
```
### Load Node and JS dependencies
```bash
npm install
```
You have to install Yarn first here :
###### [Yarn installer](https://yarnpkg.com/en/docs/install#windows-stable "Yarn Documenation")
### Then run this to load Yarn
```bash
yarn install
```
#### First setup your MySQL database and write the connection infos into .env file
### Then run this to load database structure
```bash
php bin/console doctrine:schema:update --force
```
### Load all the Spacewich data 
```bash
php bin/console doctrine:fixtures:load
```
### Run local server
```bash
php bin/console server:run
```
### Compile CSS and JS file 
```bash
yarn run dev --watch
```

#### you're good to go !