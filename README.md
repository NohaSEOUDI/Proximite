Après installation exécuter ces commandes:

- composer install 
- yarn add --dev @symfony/webpack-encore
- yarn add webpack-notifier --dev
- yarn encore dev


 Mise à jour : pour ajouter les fixture (fausses données de tests) :
executer la commande "composer require doctrine/doctrine-fixtures-bundle --dev"
sur un terminal puis la commande php bin/console doctrine:fixtures:load
ensuite taper "yes"

Ajout du bundle pour création de l'interface de l'admin: 
executez la commande: composer require easycorp/easyadmin-bundle
