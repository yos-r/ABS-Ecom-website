# Projet fédéré / avril 2022 
Collaborateurs: 
Yosr Barghouthi , Zaineb Boujmil, Maissa Dridi, Oumaima Kridiss, Eya Ben Hamida
![abs](demo_edit_1.gif  "Site demo")
## Pre-sprint (du 14 mars au 20 mars )

Choix du thème: 
- Site de vente des matériaux de construction.

Exigences fonctionnelles:
- Consultation des produits: détails, description et catégorisation.
- Recherche
- Prise de commandes

Réalisation:
- Élaboration du prototype de la base de données (tables, champs et données à introduire)
- Carte du site
- Palette du site (design)
- Répartition des tâches

Structure du site:
- Partie catalogue (accessible à tous les visiteurs) permettant la consultation des produits et catégories.
- Partie client permettant la gestion d’un compte client. 
- Partie administrateur permettant la gestion de l’inventaire et des transactions.

## Schéma de la base de données:
Client(E-mail, NomClient, MdpClient, AdrClient)
Produit(CodeProduit,NomProduit, Prix, #CodeCatégorie,#CodeFabricant, DescriptionProduit)
Catégorie(CodeCatégorie,NomCatégorie)
Fabricant(CodeFabricant,NomFabricant)
Admin(Email,mot_de_passe)
Panier(ip_add,code_produit,qté,prix_unitaire)
CommandeClient(#numeroFacture,#code_produit,qté,sous-total)
Commandes(numéroFacture, codeClient, date, total, adresse,statut)
 

## Sprint 1 (du 21 mars 2022 au 3 avril) 
Réalisation
- Interface d’accueil (index.php) + en-tête + bas de page
- Page d’index responsive
- Entête du site: liens et logo
- Bas de page du site
- Scripts de connexion et d’inscription + authentification
- Interface du panier + fonctions PHP (nombre d’éléments, sous total, adresse IP pour ajouter des produits au panier sans recours à un identifiant du client.
- Interface de gestion du compte utilisateur + historique des commandes
- Interface de login admin + script d’authentication
- Interface d’acceuil de l’admin
- Interface de consultation des produits/catégories/fabricants/cliens
- Scripts d’insertion, suppression, modification de produits, catégories, fabricants.


## Sprint 2 (du 4 avril au 17 avril)
Réalisation:
- Script de mise à jour du panier (ajax) 
- Interface  “informations de livraison” + script de passage d’une commande
- Interface historique des commandes avec détails des commandes
- Interfaces / formulaires de connexion, d’inscription, de mise à jour du compte.
- Barre de recherche dans l’entête
- Recherche actualisée (ajax)
- Affichage des résultats retournés dans la barre de recherche
- Interface des résultats de recherche (par mot-clé, search.php)
- Modifier le style de footer et barre de recherche (client side)
- Modification du style de l’interface client 
- Menu déroulant pou
- scripts/interface de CRUD


## Dernier sprint  (18 avril - 28 avril) Finalisation

Réalisation
- Filtrage des produits avec jquery 
- Redirection avec .htaccess vers l’url d’un produit.
- Interface de la page produit (details.php)
- Modification finale du header et footer (client side)
- Gestion des fabricants (admin)






 



