
# Les solutions libres existantes de collecte, centralisation et présentation de logs 

## 1. ELK Stack (Elasticsearch, Logstash, Kibana)

### Points clés
- **Flexibilité** : Grande flexibilité grâce à la configuration de Logstash et aux capacités de recherche d'Elasticsearch.
- **Communauté** : Très large communauté et de nombreux plugins disponibles.
- **Visualisation** : Kibana propose une multitude de visualisations pour analyser les données.

### Avantages
- Solution mature et éprouvée.
- Grande capacité de traitement de données.
- Possibilités d'analyses complexes.

### Inconvénients
- Complexité de configuration, notamment pour les environnements hétérogènes.
- Peut nécessiter des ressources importantes pour des volumes de données très élevés.

## 2. Graylog

### Points clés
- **Interface utilisateur** : Interface intuitive et facile à prendre en main.
- **Fonctionnalités** : Prise en charge de multiples sources de données, alertes, recherche avancée.
- **Communauté** : Communauté active et documentation riche.

### Avantages
- Solution prête à l'emploi.
- Intégration facile avec d'autres outils.
- Bon compromis entre fonctionnalités et simplicité.

### Inconvénients
- Moins flexible que l'ELK Stack pour des configurations complexes.
- Peut être moins performant pour de très grands volumes de données.

## 3. Fluentd

### Points clés
- **Performance** : Extrêmement performant pour la collecte et l'expédition de logs.
- **Flexibilité** : Configuration flexible grâce à des plugins.
- **Communauté** : Communauté active et de nombreux plugins disponibles.

### Avantages
- Idéal pour les environnements à forte production de logs.
- Facile à intégrer dans des pipelines de traitement de données.

### Inconvénients
- Nécessite d'être couplé avec un outil de visualisation comme Kibana.
- Moins complet qu'une solution comme Graylog.

## 4. Loki

### Points clés
- **Intégration avec Grafana** : Intégration native avec Grafana pour une visualisation puissante.
- **Performance** : Bonnes performances pour la gestion de grands volumes de logs.
- **Stockage** : Utilise des backends de stockage peu coûteux comme S3.

### Avantages
- Parfait pour ceux qui utilisent déjà Grafana.
- Solution légère et évolutive.

### Inconvénients
- Moins mature que d'autres solutions.
- Moins de fonctionnalités avancées.

# Solution choisie

Node Exporter a été utilisé pour récupérer les métriques de la machine. Prometheus couplé à Grafana forme une combinaison puissante pour créer une interface d'affichage de logs, bien qu'ils soient principalement conçus pour la collecte, la gestion et la visualisation de métriques de performance en temps réel. Ces outils peuvent être adaptés pour afficher des logs via des métriques dérivées. Prometheus collecte les métriques, et Grafana, avec son interface flexible et hautement personnalisable, permet d'intégrer des tableaux de bord combinant graphiques de métriques et panneaux de logs, facilitant ainsi le suivi des performances et le dépannage. De plus, Grafana permet de configurer des alertes basées sur des métriques spécifiques dérivées des logs et prend en charge diverses sources de données comme Elasticsearch, offrant une gestion unifiée des métriques et des logs. Enfin, Prometheus et Grafana bénéficient d'une communauté active, ce qui facilite la personnalisation et l'extension de la solution. 
