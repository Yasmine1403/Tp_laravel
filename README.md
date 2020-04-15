Bienvenue dans « Mon Mini Blog » 

Cette application est réalisée par Hadj ARAB Yasmine 



Présentation :

il s’agit de l’implémentation d’une application dans le cadre du rendu de projet du cours programmation web coté serveur.
Projet : « création d’une application web avec le framework PHP Laravel »
MASTER MIASHS DCISS 2020.

L’application est en cours, n’est pas totalement finie et d’autres fonctionnalités vont être implémentées et rajoutées afin d’enrichir le service qu’offre cette l’application.

Contenu : 

Le dossier fourni contient les répertoires Laravel de notre application, une installation préalable du framwrk Laravel est donc nécessaire, il faudra installer également sqlite3 pour pouvoir, utiliser une base de donnée en local.

Comment l’installer ?

C’est très simple, si vous avez déjà Laravel et sqlite3 sur votre machine, passez directement à la Section2.  
Si vous n’avez pas encore installé Laravel sur votre machine, téléchargez et installez les paquets suivants, (Section1) en collant dans votre terminal les lignes de commandes suivantes, les une après les autres :

Section1 :
pour installer composer :

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer

Maintenant composer est installé, vous pouvez vérifier en tapant : 
composer --version

pour installer laravel via laravel composer, tapez dans la console:

composer global require laravel/installer

pour installer sqlite3, tapez:

apt -get install sqlite3

(cela suppose que vous êtes sous linux et que vous avez php accessible en ligne de commande / précédez les lignes de commandes ci-haut avec sudo si vous êtes en mode super utilisateur)

A présent vous devez avoir Laravel et sqlite3 d’installés, vous pouvez le vérifier en tapant respectivement :

laravel

sqlite3


Section2 :

    •  Clonez le dépôt Tp_laravel sur votre machine à partir de:
    https://github.com/Yasmine1403/Tp_laravel.git 
ou en tapant dans votre terminal : 

git clone https://github.com/Yasmine1403/Tp_laravel.git 

    • Placer vous dans le répertoire du projet et lancez le serveur, en tapant depuis le terminal :
php artisan serv 

Le blog devrait être accessible à partir de l’URL affichée dans votre console (Ouvrez le lien).

    • Modifiez le fichier  .env de l’application en spécifiant le chemin complet vers le fichier database.sqlite du répertoire database, exemple :
    
       DB_DATABASE=/home/yasmine/Documents/projetWeb/tp/yasmine/database/database.sqlite
       
       Vérifiez que la connexion avec sqlite est établie:
       
       DB_CONNECTION=sqlite
       
Après avoir modifier le fichier .env  il faudra couper le serveur puis le relancer.

    • Lancez les migrations pour créer les tables de la base de données avec la commande :
    
        php artisan migrate
      
    • Pour peupler la base de données, lancez à partir de la console la commande :
    
        php artisan migrate:fresh --seed -v
      
      Si cela ne fonctionne pas tapez la commande :
      
      composer dump-autoload
      
      Puis:
      
      php artisan db:seed –class=UsersTableSeeder      
      
      En principe les table sont crées avec 10  faker enregistrements . 
      
la base de donnée est en principe visualisable à partir de l’interface graphique phpLiteAdmin via l’URL http://127.0.0.1:8000/phpliteadmin.php  Le mot de passe est admin

      
      Vous pouvez également vérifier cela via tinker en tapant dans votre console (après avoir coupé le serveur, ou en ouvrant un autre terminal et vous situer dans le répertoire du projet):
      
         php artisan tinker 
           
      Cela vous permet d’accéder à tinker et d’afficher par exemple le contenu de la table user avec : 
      App\User:: all();   
      Ou   App\User::all()->pluck('name'); (pour afficher juste les noms)
      
      (ctrl+c) pour quitter tinker
      

Maintenant retournons sur le Blog, vous pouvez pour le moment, vous inscrire, envoyer un message, lire un article ou le commenter.

La page d’accueil vous affiche les trois derniers articles enregistrés.
Vous pouvez consultez ces articles et les commentez ou consulter la totalité des articles disponibles à partir de la rubrique Article. 


#A venir :
plein d’autres fonctionnalités géniales. 

#ressources utilisées : Framwork Laravel , template HTML “Blog Single Column” 
