# Thon Mayo

<p align="center">
  <img src="https://github.com/Freyr29/thonmayo_laravel/assets/91483937/1a6b1de5-7da1-4cc0-b49a-784082dbe621" alt="Thon Mayo Logo" width="400"/>
</p>

## Description

Thon Mayo est un projet développé avec Laravel, et utilisant Docker. Ce projet de BTS permet à des utilisateurs de se connecter afin de commander des sandwichs et de la nourriture. Une gestion administrateur est aussi présente.
/!\ Ce projet est en cours de finition /!\

## Technologies Utilisées

- **Laravel** : Un framework PHP pour le développement d'applications web.
- **Docker** : Une plateforme de conteneurisation qui permet de créer, déployer et exécuter des applications facilement dans des conteneurs.
- **Base de données SQL** : Pour la gestion et le stockage des données.

## Installation

Pour installer et exécuter ce projet localement, suivez les étapes ci-dessous :

### Prérequis

- Docker
- Docker Compose

### Étapes

1. Clonez le dépôt :
    ```sh
    git clone https://github.com/votre-utilisateur/thon-mayo.git
    cd thon-mayo
    ```

2. Copiez votre fichier d'environnement :
    ```sh
    cp .env ./
    ```

3. Modifiez les variables d'environnement dans le fichier `.env` selon vos besoins.

4. Construisez et lancez les conteneurs Docker :
    ```sh
     sudo docker-compose up -d --build
    ```
    ![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/d45f0535-fad7-49d1-a72b-4cf01fa4526b)
   
5. Effectuez la migration
    - Attachez-vous au docker app, et faites la migration
    ```sh
    sudo docker ps #repérer l'id du docker app
    sudo docker exec -it <Your_ID> bash
    php artisan migrate:refresh
    ```
    ![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/4f1cfd8f-2fdc-4397-8d87-23e04353a6ca)

6. Vous trouverez les credentials admin dans `admin_creds` afin de tester la fonctionnalité.

7. Voici quelques aperçus de la plateforme

![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/131d136a-68d3-48a2-816c-5ef7c4c19965)
![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/69490ef0-064c-4916-9461-69311c44630f)
![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/164cb7c3-3cd1-4b00-aa7e-7c71de25b668)
![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/eca811da-b0f0-485b-9d75-360a6c38276e)
![image](https://github.com/Freyr29/thonmayo_laravel/assets/91483937/252ecd64-9ab6-473b-aa08-2acd7f4e51ac)


