Apres avoir clone le repertoire avec la commande git clone --branch master https://github.com/abalkhassimtraore/Apoloan.git
Se positioner dans le dosser ouvrir un terminal et lancer les commandes
composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate

et enfin lancer le serveur de developemment avec php artisan serve
