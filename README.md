# Rapport Stage PFA:

### **Contexte:**

La création et la gestion de plusieurs sites web simultanément peuvent rapidement devenir un véritable cauchemar, notamment lorsqu'il s'agit de maintenir et de configurer des projets WordPress avec des thèmes et des plugins préinstallés, ainsi que d'utiliser Next JS. Cette problématique soulève des préoccupations quant au temps et aux efforts considérables nécessaires pour mener à bien ces tâches complexes.

### Solution:

Une solution consiste à développer une CLI multiplateforme conviviale qui crée et configure automatiquement le projet, avec toutes les dépendances et les plugins prêts à l'emploi. Cette CLI utilisera Node.js pour le scripting, Docker pour la conteneurisation de l'application et Bedrock pour gérer WordPress avec Composer. Cela simplifiera la maintenance et la configuration des projets WordPress, ainsi que la création de multiples sites web simultanément.

### Prérequis :

Avant d'utiliser la CLI pour la création et la configuration automatique des projets WordPress, assurez-vous de disposer des éléments suivants :

1. Système d'exploitation Linux : Assurez-vous d'utiliser un système d'exploitation Linux compatible, tel que Ubuntu, Debian, CentOS, etc. Cela garantira une compatibilité optimale avec les outils utilisés.
2. Node.js 16+ : Installez Node.js version 16 ou supérieure sur votre système. Node.js est nécessaire pour exécuter les scripts de la CLI et automatiser les tâches de configuration. Vous pouvez télécharger et installer Node.js à partir du site officiel : **[https://nodejs.org](https://nodejs.org/)**
3. npm 7+ : npm est le gestionnaire de paquets de Node.js. Assurez-vous d'avoir npm version 7 ou supérieure installée avec Node.js. npm sera utilisé pour installer les dépendances nécessaires à la CLI et aux projets WordPress. La mise à jour de npm se fait généralement automatiquement lors de l'installation de Node.js.
4. Docker et Docker Compose : Installez Docker et Docker Compose sur votre système. Docker est utilisé pour la conteneurisation de l'application WordPress, tandis que Docker Compose facilite la gestion des conteneurs et des services associés. Vous pouvez trouver des instructions d'installation détaillées pour votre système d'exploitation sur le site officiel de Docker : **[https://docs.docker.com/get-docker/](https://docs.docker.com/get-docker/)**
5. PHP 7.4+: Install PHP version 7.4 or higher on your Linux system. PHP is a server-side scripting language required for running WordPress and its associated plugins. You can install PHP by following the instructions specific to your Linux distribution.

Une fois que vous avez satisfait à ces prérequis, vous serez prêt à utiliser la CLI pour créer et configurer facilement vos projets WordPress avec les dépendances et les plugins préinstallés, en utilisant Node.js pour le scripting et Docker pour la conteneurisation de l'application

**Installation de CLI**:

```bash
#our utiliser la CLI, veuillez suivre les étapes suivantes :

#Clonez le projet en utilisant la commande suivante :
git clone https://gitlab.com/AzzeddineLiahimdi/gwea.git

# Accédez au répertoire du projet :
cd gwea

#Démarrez la CLI en exécutant la commande suivante :
#(Facultatif) Si vous souhaitez générer une version de production de la CLI, exécutez la commande :
npm start

#(Facultatif) Pour exécuter la CLI en mode de développement, utilisez la commande :
npm run dev

# Pour compiler l'application, vous pouvez utiliser la commande suivante :
npm run build
```

- En suivant ces étapes, vous pourrez exécuter la CLI et commencer à créer et configurer vos projets WordPress en utilisant les fonctionnalités fournies. Assurez-vous d'avoir respecté les prérequis mentionnés précédemment, tels que l'installation de Node.js, npm, Docker et Docker Compose.

### Note : Pour change la langue :

Pour changer la langue de l'application, suivez les étapes suivantes :

1. Ouvrez le fichier **`config.json`** situé dans le répertoire du projet.
2. Recherchez la propriété **`lang`** dans le fichier JSON. Elle ressemblera à ceci 

    
    ```
    "lang": "fr"
    ```
    
3. Modifiez la valeur de la propriété **`lang`** en "en" pour l'anglais ou "fr" pour le français, selon la langue souhaitée. Par exemple :
    
    ```
    
    "lang": "en"
    ```
    
4. Enregistrez les modifications apportées au fichier **`config.json`**.
5. Ensuite, reconstruisez l'application en utilisant la commande :
    
    ```
    
    npm run build
    
    ```
    

- Cela déclenchera le processus de construction en intégrant la nouvelle configuration de langue. L'application sera reconstruite avec les nouveaux paramètres linguistiques appliqués.

### Dépannage:

- Après avoir configuré WordPress dans Docker, vous devriez effectuer quelques modifications de permissions en utilisant les commandes suivantes :
    
    ```bash
    
    # obtenir l’identification de votre conteneur
    docker ps
    #ouvrir une session dans le conteneur 
    docker exec -it -u 0 <container_id> bash
    # Changer le propriétaire des fichiers et répertoires WordPress en www-data:www-data :
    chown -R www-data:www-data /app
    
    #Accorder des permissions en lecture et écriture au groupe sur les fichiers et répertoires WordPress :
    chmod -R g+rw /app
    ```
    
- vous pouvez lire les journaux en cas d’erreur

```bash
logs/
├── command.log # Ce fichier enregistre les commandes exécutées.
├── error.log # Ce fichier enregistre les erreurs rencontrées.
└── result.log# Ce fichier enregistre les résultats ou les sorties obtenues.
```

- Ces commandes ajusteront les permissions des fichiers et répertoires de l'application WordPress pour garantir que l'utilisateur www-data (utilisateur par défaut pour les serveurs web) dispose des permissions nécessaires pour accéder et modifier les fichiers.

Assurez-vous d'exécuter ces commandes après avoir configuré WordPress dans Docker et lorsque vous êtes dans le répertoire approprié (/app dans cet exemple). Cela aidera à éviter les problèmes de permissions et à garantir le bon fonctionnement de l'application WordPress.
- vous devez installer l’extension php  par la command en cas d’error

```jsx
sudo apt-get install php-xml
npm install cli-color
```

### Demo Example :

```bash
Quel est le nom de votre projet ? (Demo Project)
sanity_projet
Chemin du projet (où voulez-vous mettre ce projet) ?(/home/sohaib/Desktop/)

/home/sohaib/Desktop
Voulez-vous initialiser un référentiel Git ? (yes)

URL de base du projet ? ([http://localhost:8080](http://localhost:8080/))

Est-ce un projet multisite ? (yes)
yes
Est-ce un projet de commerce électronique ? (yes)
yes
Quel est le nom de votre base de données ? (wordpress)

my_db
Quel est votre mot de passe de base de données ? (demo)
top_secret
```

- After performing the permission changes, the resulting folder structure for the WordPress installation should typically follow the standard WordPress directory structure. Here's an overview of the main folders and their contents:
1. **`/app`** (or the root folder of the WordPress installation)
    - **`wp-admin`**: Contains files related to the WordPress administration dashboard.
    - **`wp-content`**: Stores themes, plugins, uploads, and other customizations.
        - **`themes`**: Contains installed WordPress themes.
        - **`plugins`**: Holds installed WordPress plugins.
        - **`uploads`**: Stores uploaded media files.
    - **`wp-includes`**: Contains core WordPress files and libraries.
    - **`wp-config.php`**: The configuration file for the WordPress installation.
    - Other WordPress files and directories.

The specific structure and contents may vary depending on the version of WordPress and any additional themes or plugins installed. However, the general organization outlined above represents a typical WordPress installation.

```bash
sanity_projet/
├── docker-compose.yaml
└── wordpress
├── composer.json
├── composer.lock
├── config
│   ├── application.php
│   └── environments
├── [LICENSE.md](http://license.md/)
├── phpcs.xml
├── [README.md](http://readme.md/)
├── vendor
│
├── web
│   ├── app
│   ├── index.php
│   ├── wp
│   └── wp-config.php
└── wp-cli.yml
```

### Starter template(Next Js) with E-commerce template starter pre-configured:

```bash
# Cloner le dépôt
git clone https://gitlab.com/AzzeddineLiahimdi/gwea_nextjs.git

# Accéder au répertoire du projet
cd gwea_nextjs

# remplir vos variables d’environnement
cp .env.example .env.local

# Installer les dépendances
npm install

# Démarrer le serveur de développement( assurez-vous que WordPress fonctionne correctement et les plugins sont activés) 
npm run dev

# Laisser le serveur de développement en cours d'exécution (facultatif)
npm run dev

# Démarrer le serveur de production (si applicable)
npm start
```

### T**echnologies utilisées:**

Voici les technologies couramment utilisées pour la maintenance et la configuration de projets WordPress avec des thèmes et des plugins préinstallés, en utilisant Next.js et Bedrock :

1. WordPress : Une plateforme de gestion de contenu (CMS) écrite en PHP, utilisée pour la création de sites web et de blogs. WordPress offre une large gamme de thèmes et de plugins pour personnaliser et étendre les fonctionnalités d'un site web.
2. Next.js : Un framework React pour le développement d'applications web côté serveur et côté client. Next.js permet de créer des applications web rapides, évolutives et SEO-friendly en utilisant le rendu côté serveur (SSR) et le rendu côté client (CSR) selon les besoins.
3. Bedrock : Une structure de développement pour WordPress qui suit les meilleures pratiques de l'architecture des applications web modernes. Bedrock facilite la gestion de WordPress en utilisant des outils tels que Composer pour la gestion des dépendances et l'organisation du code, permettant ainsi une meilleure gestion des projets WordPress.
4. Node.js : Une plateforme de développement JavaScript côté serveur qui permet d'exécuter du code JavaScript en dehors d'un navigateur. Node.js est souvent utilisé pour automatiser des tâches, gérer les dépendances et exécuter des scripts de configuration.
5. Docker : Une plateforme de conteneurisation qui facilite la création, le déploiement et la gestion d'applications dans des conteneurs légers et portables. Docker permet de créer des environnements isolés pour exécuter des applications de manière cohérente et reproductible.
6. Nginx : Un serveur web léger et rapide utilisé pour la mise en œuvre de la gestion des requêtes HTTP et du proxy inverse. Nginx peut être utilisé comme serveur web pour héberger et servir des sites WordPress

L'utilisation de ces technologies combinées (WordPress, Next.js, Bedrock, Node.js et Docker) permet de développer des projets WordPress avec une architecture moderne, des performances optimisées et une meilleure gestion des dépendances et de l'infrastructure.

# **Lien Utile :**

**Cli:** 

[https://gitlab.com/AzzeddineLiahimdi/gwea](https://gitlab.com/AzzeddineLiahimdi/gwea)

**NextJs Starter:**

https://gitlab.com/AzzeddineLiahimdi/gwea_nextjs

 **CLI + demo WordPress  avec docker et avec Local+ demo NextJs tout est configuree :**

https://drive.google.com/file/d/1wYwYFeKC1bGOX9TY6SWXi2m8g0-y5SSG/view?usp=sharing

Docs:

[https://nextjs.org/](https://nextjs.org/)

[https://docs.docker.com/](https://docs.docker.com/)

### **Next vs Gatsby js**

Gatsby.js et Next.js peuvent tous deux être utilisés pour développer des sites de commerce électronique, mais ils ont des approches différentes. Gatsby.js se concentre davantage sur la génération de sites web statiques, ce qui peut être approprié si votre boutique en ligne ne nécessite pas de mises à jour fréquentes du contenu ou des données en temps réel. Il est connu pour sa rapidité et ses performances élevées.

En revanche, Next.js est plus adapté pour les applications web dynamiques, y compris les boutiques en ligne nécessitant des fonctionnalités avancées, telles que la gestion des paniers d'achat, les paiements en ligne en temps réel, les intégrations avec des services tiers, etc. Next.js offre une flexibilité supérieure pour la gestion de l'état de l'application et les interactions en temps réel.

Si vous avez besoin d'une boutique en ligne avec des fonctionnalités avancées et une interaction en temps réel, Next.js serait probablement le meilleur choix. Il offre une excellente prise en charge du rendu côté serveur (SSR) et des fonctionnalités de routage dynamique, ce qui peut être bénéfique pour les fonctionnalités liées au commerce électronique.

Cependant, si votre boutique en ligne est relativement simple et se concentre davantage sur l'affichage des produits sans nécessiter d'interactions complexes, Gatsby.js pourrait être une option plus appropriée. Son approche statique peut permettre une meilleure performance et une meilleure mise en cache des pages.

En résumé, pour une boutique en ligne, Next.js est généralement recommandé si vous avez besoin de fonctionnalités avancées et d'interactions en temps réel, tandis que Gatsby.js peut convenir pour des boutiques plus simples qui se concentrent principalement sur l'affichage des produits.
