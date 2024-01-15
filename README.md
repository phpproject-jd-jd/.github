# To-Do List

Ce projet est une application To-Do List développée en PHP avec une architecture MVC. Il permet de gérer une liste de tâches, les afficher, les créer, les mettre à jour et les supprimer.

## Structure du Projet

```
- /todo-list
  - /app
    - /controllers
      - TodoController.php
    - /models
      - TodoModel.php
    - /views
      - todo-list.php
      - todo-details.php
      - create-todo.php
    - config.php
  - /public
    - index.php
    - router.php
    - /css
      - style.css
```


## Configuration

### Instructions d'exécution

- Clonez le projet dans le répertoire de votre serveur web local.
    - Saisir "`git clone https://github.com/phpproject-jd-jd/.github`" dans fenêtre cmd ouverte depuis le dossier dans lequel vous voulez télécharger le projet
-  Configurez la base de données dans le fichier `config.php`. (expliqué plus tard).
- Assurez-vous que le serveur web est démarré.
    - Utilisez un serveur web local comme XAMPP, WampServer ou MAMP pour exécuter l'application.        
- Accédez à l'URL correspondant à votre fichier `index.php` dans un navigateur.       

## Aide à la configuration:

### Base de données

Informations de connection à la base de données: 

Définir les informations de connexion dans le fichier `config.php`.

```php
define('DB_HOST', '51.158.59.186:14301');
define('DB_NAME', 'dbJD');
define('DB_USER', 'phppex');
define('DB_PASSWORD', 'Supermotdepasse!42a');
```

- Télécharger "MySQL workbench"   

- Lancez l'application MySQL Workbench sur votre ordinateur.  
    
- Dans la fenêtre principale, cliquez sur l'icône "+" à côté de "MySQL Connections" pour ouvrir la fenêtre de connexion.
Entrez un nom pour la connexion dans le champ "Connection Name".

- Remplissez les champs avec les informations que vous avez saisi dans `config.php`.

- Cliquez sur le bouton "Test Connection" pour vérifier que les informations de connexion sont correctes.

- Dans la fenêtre principale, double-cliquez sur la connexion que vous venez de créer pour vous connecter à la base de données.

## Fonctionnalités

- Affichage des Tâches : La page principale affiche la liste des tâches.
- Détails d'une Tâche : Cliquez sur une tâche pour afficher ses détails.
- Création de Tâches : Utilisez le formulaire pour créer de nouvelles tâches.
- Mise à Jour de Tâches : Modifiez les détails d'une tâche existante.
- Suppression de Tâches : La suppression n'est pas implémentée dans cet exemple.
