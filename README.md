

## Guide d'installation pour l'application test-annonce fait avec le framework Laravel

* Connectez vous avec les bonnes permissions (root ou superadmin)
* Clonez le repo `git clone https://github.com/fanblater/test_annonce.git`
* Accédez au projet via la commande `cd test_annonce`
* Installez les dépendances du projet à partir de composer via la commandes `composer install` 
    * Il faut également installer le package kyslik/column-sortable de composer via la commande `composer require kyslik/column-sortable` 
* Le fichier .env n'est pas soumis au repo git pour des raisons de sécurité il faudra alors faire une copie de .env.example vers .env via la commande `cp .env.exemple .env` 
* Générez votre clé d'encryption afin que l'application puisse encoder divers éléments de l'application. Pour cela utilisez la commande : `php artisan key:generate`.
    * Si vous fermez et ré-ouvrez le fichier .env, vous verrez qu'un clé a été généré dans la variable APP_KEY
* Partie base de données:
    * Afin d'avoir les bonnes permissions sur le projet vous pouvez utiliser les commandes suivantes : 
        * `cd ..`
        * `chmod 755 -R test_annonce/`
        * `chmod -R o+w test_annonce/storage`
    * Il faut également nettoyer le projet via les commandes : 
        * `cd test_annonce`
        * `php artisan cache:clear`
        * `php artisan view:clear`
        * `php artisan config:clear`
* Créez une base de donnée vide pour le projet
* Configurez le fichier .env pour permettre la connexion à la base de donnée
* Ajoutez les tables et le contenu de la base avec les migrations
    * `php artisan migrate:fresh`

## Une fois le projet installé et la base de donnée créé vous pouvez démarrer le projet via la commande `php artisan serve` depuis le projet


