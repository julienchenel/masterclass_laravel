                                        Présentation /comparaison Symfony / Laravel



Exercice Laravel:



Pour cet exercice, je veux pouvoir:

Ajouter des données et les afficher dans mon tableau
Editer des données
Supprimer des données
Visualiser les données


Attention: Ne pas faire toutes les routes d’un coup. Faite une route puis sa fonction et ainsi de suite.
    


1) Définir la route qui permet de visualisé le tableau:

Utiliser le blade formateur
La route appelle le contrôleur formateur et la fonction index
Toutes les données sont visible dans le tableau    


 2) Ajouter des données dans la base de donnée et chaque donnée sont visuelle  dans le tableau:


Utiliser le blade formulaireformateur
Dans le contrôleur la  fonctions create permet de créer une nouvelle donnée
La fonction store permet d’insérer les données.
Dans le blade il manque l’action à la ligne 11 et une variable à la ligne 31


3) Editer les données:
Toujours le blade formulaireformateur
Nous allons créer une fonction qui permette d’éditer une donnée ou plusieurs 
Idéalement il est bon de créer une fonction dédiée à la mise jour. dans le controller elle s’appelle update 


4) Supprimer les données:

Utiliser le blade formulaireformateur
Dans le contrôleur utilisé la fonction destroy



5) visualiser la fiche de chaqun des formateurs:


Utiliser le blade visuformateur
Dans le contrôleur utilisé la fonction show
Dans le blade formateur ligne 25. Ajouter l’URL qui nous permettra  de visualiser une donnée. La donnée nom se mettra en hyperlien dans le tableau.


Bonus:

Les données peuvent être supprimé dans le tableau mais pas dans la base de données. Dans la base on verra quand et à quel heure la donnée a été supprimé
Faite un middleware pour sécuriser l’authentification des routes.




https://laravel.com/docs/5.6/eloquent
https://laravel.com/docs/5.6/controllers

