# SAE51_logs
#### Arno Djenadi - Gaëtan Kermarrec


## Travail à effectuer

- Produire un document de synthèse en Markdown présentant les solutions libres existantes de collecte, centralisation et présentation de logs. Vous donnerez leurs points-clés (features, communauté
associée, etc.) et leurs avantages et inconvénients respectifs. Vous vous intéresserez notamment
aux possibilités de centralisation (collecte des logs issus de plusieurs conteneurs/machines), à la
facilité d’utilisation et d’installation, et aux possibilités offertes par les "dashboard".

- Produire un Dockerfile qui met un oeuvre une situation simple de collecte de logs, basée sur une
des solutions existantes. Le lancement du (des ?) conteneur(s) doit permettre de se faire une idée
des possibilités, via une doc associée, rédigée en Markdown.

## Nos échecs

- Dans un premier temps, nous avons tenté de récupérer les logs d'une page web réalisé par nos soins mais nous avons réalisé que Node Exporter collecte les métriques de la machine.
- Dans une second temps, nous avons tenté de crée notre docker à partir d'un script bash. Mais nous n'avons pas trouver les comment mettre en place les solutions attendues.
- Pour finir, lors de la configuration du grafana nous nous sommes trompé de source en indiquant **localhost:9100** au lieu de **node-exporter:9100**

## Solutions 

Nous avons finallement choisis d'utiliser Node Exporter qui récupere les métriques de la machine au lieu d'utiliser NGINX pour allèger notre rendu.

**Node Exporter** : Cet outil collecte des métriques sur la machine.Il fournit des informations sur l'utilisation du CPU, de la mémoire, du disque,etc...

**Prometheus** : Cet outil interroge régulièrement Node Exporter pour collecter les données et les stocke dans une base de données

**Graphana** : Cet outil de visualisation nous permet de créer des tableaux de bord interactifs basés sur les données collectées par Prometheus.


![Diagramme de l'architecture de notre projet](./src/Diagramme_Logs.png "Diagram me de l'architecture de notre projet")

## Mise en place

Pour la mise en place, avec le fichier ZIP, il faut unzip le fichier ce qui va donner une arborescence comme celle-ci :
![Arborescence attendu](./src/tree.png "Arborescence à avoir avec le fichier ZIP")

Une fois que nous avons bien unzip le fichier il faut se placer à la racine.
Pour lancer la totalité des conteneurs il faut faire cette commande :
> docker compose up -d

L'argument -d sert à se détacher des conteneurs et donc garder la main sur son terminal.

Et pour arrêter et supprimer les conteneurs il y a le fichier stop.sh.

Une fois cela fait il faut se rendre sur cette adresse :
> localhost:3000

Le port 3000 étant celui de grafana.

Une fois sur la page il faut se connecter les identifiants sont ceux de base donc : 
Dans "email or username" : admin
Dans "Password" : admin
Puis skip le changement de mot de passe.

Une fois bien connecté ouvrir le menu sur le côté aller dans connections puis add new connection :
![Ajout nouvelle source](./src/newsource.png "Ajout d'une nouvelle source de donnée")

Puis chercher "Prometheus" et selectionner :
![Ajout source prometheus](./src/prometheus.png "Source prometheus")

Une fois sur la page cliquer sur "Add new data source"
Et après il suffit de renseigner dans le champ "Connection" :
> http://prometheus:9090
Puis aller tout en bas de la page et faire "save & test"

Une fois cela fait, il faut ouvrir le menu sur le côté et aller dans le menu "Dashboard" :
![Aller dans le menu dashboard](./src/dashboard.png "Aller dans le dashboard)

Dans ce menu cliquer sur "create dashboard" puis "import dashboard" :
![Import le Dashboard](./src/import.png "Import du dashboard")

Cliquer sur "load" puis il faut selectionner notre source prometheus et faire import.

Une fois cela fait on arrive sur la page avec nos metrics :
![Image du dashboard](./src/dashboardd.png "Dashboard avant changement")

Il reste seulement un dernier changment c'est changer l'echelle de temps pour voir l'évolution sur les 5 dernières minutes :
![Image du dashboard fini](./src/enddashboard.png "Dashboard après changement")


## Essai

Nous avons essayé de mettre en place l'automatisation de l'intégration de la data source dans Grafana via la doc, l'essai se trouve dans le fichier default.yml dans le dossier ./grafana/datasources/
Nous avons aussi essayé de trouver comment faire en sorte de ne pas avoir à se log quand on lance Grafana mais nous n'avons pas trouvé si c'était possible.
