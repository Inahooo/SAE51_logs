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

Dans un premier temps, nous avons tenté de récupérer les logs d'une page web réalisé par nos soins mais nous avons réalisé que Node Exporter collete initialment les métriques de la machine.
Dans une second temps, nous avons tenté de crée notre docker à partir d'un script bash. Mais nous n'avons pas trouver les comment mettre en place les solutions attendues.


## Solutions 

![](./src/Diagramme_Logs.png "Diagramme de l'architecture de notre projet")

## Mise en place



