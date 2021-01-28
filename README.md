# Techno-Web-Projet
<br/>
Larrode Alexis - Cruz Julien  B2A <br/>
<br/>
Ce projet est un site permettant de commander dans différents réstaurants<br/>
<br/>
Pour utiliser le projet se rendre dans le dosier du projet, et dans le terminale faire : <br/>
-composer install <br/>
-npm install <br/>
-copy .env.example .env <br/>
-php artisan key:generate <br/><br/>
Puis supprimer les lignes 11 à 15 du .env et dans la ligne 10 remplacer mysql par sqlite <br/>
<br>
Ensuite créez un ficher database.sqlite dans le dossier database puis dans le terminal faire : <br/>
-php artisan migrate <br/>
