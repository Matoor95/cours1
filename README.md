git clone https://github.com/Matoor95/cours1.git

Naviguer au niveau du projet : ex : cd repertoire

composer install

dupliquer le fichier .env.example et le renomer en .env en mettant les info de ta base de donnees mysql

php artisan key:generate 
php artisan migrate
php artisan serve pour lancer l'application
