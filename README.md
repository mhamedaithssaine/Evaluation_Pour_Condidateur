# Online Course Management System
`Bienvenue dans le projet de système de gestion de cours en ligne développé dans le cadre de l'évaluation pour un stage en développement full-stack chez TeamElGhazi. Ce projet est une plateforme permettant de lister des cours, consulter leurs détails, gérer des utilisateurs avec authentification, et offrir un tableau de bord pour les apprenants.`

# Fonctionnalités implémentées
- Front-end
`Page d'accueil : Affiche une liste des cours disponibles avec un design clair et responsive.
Page de détail d'un cours : Présente les informations du cours, ses modules, et la progression de l'utilisateur connecté.
Inscription et connexion : Interface utilisateur pour créer un compte ou se connecter avec validation des formulaires.
Tableau de bord apprenant : Vue personnalisée pour chaque utilisateur, affichant ses cours suivis et sa progression.
Responsive design : Interface adaptée pour desktop, tablette et mobile.`
Back-end
API RESTful : Endpoints pour gérer les cours, modules, utilisateurs et progressions.
Authentification : Système basé sur JWT pour sécuriser les accès aux ressources.
Gestion des utilisateurs : Création, modification et suppression des comptes avec rôles (apprenant/admin).
Base de données : Stockage structuré des données (cours, utilisateurs, progressions).
Bonus
Tests unitaires : Tests pour les principales fonctions de l'API (ex. authentification, récupération des cours).
Documentation de l'API : Liste des endpoints avec exemples dans le fichier api-docs.md.
Déploiement : Application déployée sur Netlify (front-end) et Render (back-end) pour démonstration.
Architecture technique
Le projet suit une architecture client-serveur avec une séparation claire entre le front-end et le back-end :

Front-end :
Framework : React pour une interface dynamique et modulaire.
Gestion d'état : React Context pour les données globales (ex. utilisateur connecté).
Routage : React Router pour naviguer entre les pages.
Back-end :
Serveur : Laravel pour une API RESTful légère et performante.
Authentification : JWT pour sécuriser les endpoints.
Base de données : Mysql  pour sa flexibilité avec les données non structurées.
ORM/ODM : Mongoose pour interagir avec MongoDB de manière intuitive.
Communication : Le front-end communique avec le back-end via des requêtes HTTP (Axios).
Organisation du code :
Front-end : Structure modulaire avec composants réutilisables.
Back-end : Séparation en couches (routes, contrôleurs, services, modèles).
# Instructions d'installation et d'exécution
Prérequis
laravel (version 12 )
Msql 
Git pour cloner le dépôt
Un navigateur moderne (Chrome, Firefox, etc.)
# Étapes d'installation
Cloner le dépôt :
bash

Réduire

Envelopper

Copier
git clone https:https://github.com/mhamedaithssaine/Evaluation_Pour_Condidateur/new/main






