🎮 GameTrackr
GameTrackr est une application web permettant aux utilisateurs de suivre leur temps de jeu, leur backlog, leurs achats de jeux et leurs interactions.
Elle repose sur une architecture hybride :

Base SQL (MySQL) pour les données relationnelles (jeux, utilisateurs, backlogs, genres, plateformes)
Base NoSQL (MongoDB) pour les données dynamiques (sessions de jeu, commentaires, logs)
⚙️ Stack technique
Laravel 12
PHP 8.2
MySQL (Railway)
MongoDB (Atlas / Compass)
Postman (tests d’API)
MongoDB Compass (visualisation)
🚀 Installation
1. Cloner le projet
git clone https://github.com/votre-utilisateur/GameTrackr.git
cd GameTrackr/backend
Installer les dépendances
composer install
Configuration de l’environnement
Créer le fichier .env :

cp .env.example .env
Configurer MySQL et MongoDB :

Base SQL
DB_CONNECTION=mysql
DB_HOST=mysql.railway.internal
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=********
Base NoSQL
DB_MONGO_DSN=mongodb+srv://<username>:<password>@gametrackr-cluster.mongodb.net/gametrackr
DB_MONGO_DATABASE=gametrackr
Générer la clé d'application
php artisan key:generate
Lancer le serveur local
php artisan serve
🧱 Architecture technique

🗄️ Base de données relationnelle (MySQL)

🔌 Hébergement Railway.app

Connexion automatique via .env

Migrations exécutées avec :

php artisan migrate
📋 Tables

Table Description users Données des utilisateurs jeux Liste des jeux avec date, prix, durée estimée backlogs Statut des jeux ajoutés par utilisateur genres Catégories de jeux plateformes Plateformes de jeux jeu_genre Table pivot (Many-to-Many) jeu_plateforme Table pivot (Many-to-Many)

🔁 Exemple d'insertion (Postman) POST http://127.0.0.1:8000/api/jeux

{
  "titre": "Zelda",
  "temps_estime": 30,
  "prix_achat": 59.99,
  "date_achat": "2025-04-01",
  "utilisateur_id": 1
}
🍃 Base de données NoSQL (MongoDB)

🌍 Connexion

Hébergeur : MongoDB Atlas

Client local : MongoDB Compass

DSN (exemple) :

DB_MONGO_DSN=mongodb+srv://<username>:<password>@gametrackr-cluster.mongodb.net/gametrackr
📁 Collections

Collection Description sessions Historique des sessions de jeu (GameSession) commentaires Avis et notes utilisateurs (Commentaire) logs Journaux système/actions utilisateur (Log)

🔁 Exemple d'insertion (Tinker)

\App\Models\GameSession::create([
    'utilisateur_id' => 1,
    'jeu_id' => 1,
    'duree' => 45,
    'date_session' => now()
]);
🔀 Endpoints API REST

🎮 Jeux (MySQL)

GET    /api/jeux
GET    /api/jeux/{id}
POST   /api/jeux
PUT    /api/jeux/{id}
DELETE /api/jeux/{id}
GET    /api/utilisateurs/{id}/jeux
📚 Backlog (MySQL)

POST   /api/backlog
GET    /api/utilisateurs/{id}/backlog
PUT    /api/backlog/{id}/statut
PUT    /api/utilisateurs/{id}/backlog
DELETE /api/backlog/{id}
GET    /api/utilisateurs/{id}/backlog/statut/{statut}
⏱ Sessions de jeu (MongoDB)

POST   /api/sessions
GET    /api/sessions
💬 Commentaires (MongoDB)

POST   /api/commentaires
GET    /api/commentaires
📝 Logs (MongoDB)

POST   /api/logs
GET    /api/logs
🧠 MCD (Modèle Conceptuel de Données) : MCD gametrackr

✅ Tests Toutes les routes ont été testées avec Postman

Les collections MongoDB vérifiées via Compass

Données insérées avec Tinker (artisan)
