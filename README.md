# GameTrackr 🎮

GameTrackr est une application web permettant aux utilisateurs de suivre leur temps de jeu, leur backlog, leurs achats de jeux et leurs interactions. Elle repose sur une architecture hybride : base de données relationnelle **MySQL** pour la gestion des entités principales (jeux, utilisateurs, backlogs) et **MongoDB** pour les données dynamiques (sessions de jeu, commentaires, logs).

---

## 🧱 Stack technique

- **Laravel 12**
- **MySQL** pour les données relationnelles
- **MongoDB** pour les données non-relationnelles
- **PHP 8.2**
- **Postman** pour les tests d'API
- **MongoDB Compass** pour la visualisation des collections

---

## 📦 Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-utilisateur/GameTrackr.git
cd GameTrackr/backend
```

2. Installer les dépendances PHP

```bash

composer install
```

3. Configurer l’environnement

Créer un fichier .env :

```bash
cp .env.example .env
```

Configurer les bases de données dans .env :

```bash
DB_CONNECTION=mongodb
DB_MONGO_HOST=127.0.0.1
DB_MONGO_PORT=27017
DB_MONGO_DATABASE=gametrackr

# Pour MySQL
DB_CONNECTION_MYSQL=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gametrackr
DB_USERNAME=root
DB_PASSWORD=
```

4. Générer la clé d’application

```bash
php artisan key:generate
```

5. Lancer le serveur

```bash
php artisan serve
```

📂 Structure des données

🔗 Base MySQL
Users

Jeux

Backlogs

Genres

Plateformes

Relations :

Un utilisateur peut avoir plusieurs jeux via la table de backlogs

Un jeu appartient à plusieurs genres et plateformes

🧪 Base MongoDB
sessions : historiques de jeu (GameSession)

commentaires : retours utilisateurs (Commentaire)

logs : événements ou actions système (Log)


🔁 API endpoints

🎮 Jeux
GET /api/jeux

GET /api/jeux/{id}

POST /api/jeux

PUT /api/jeux/{id}

DELETE /api/jeux/{id}

GET /api/utilisateurs/{id}/jeux

📚 Backlogs
POST /api/backlog

GET /api/utilisateurs/{id}/backlog

PUT /api/backlog/{id}/statut

PUT /api/utilisateurs/{id}/backlog

DELETE /api/backlog/{id}

GET /api/utilisateurs/{id}/backlog/statut/{statut}

⏱️ Sessions de jeu (MongoDB)
POST /api/sessions

GET /api/sessions

💬 Commentaires (MongoDB)
POST /api/commentaires

GET /api/commentaires

📝 Logs (MongoDB)
POST /api/logs

GET /api/logs

✅ Tests
Toutes les routes ont été testées avec Postman (requêtes GET/POST).

Les collections MongoDB ont été vérifiées avec Compass et Tinker (php artisan tinker).

✨ À venir
Authentification & sécurité (JWT)

Tableau de bord utilisateur

Statistiques et graphiques d’analyse

Version front-end avec React
<<<<<<< HEAD
=======

>>>>>>> 20d3eb994c15a06813c0bc7051c5e360e0c76c73
