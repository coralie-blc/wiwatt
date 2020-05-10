### Taches


### Sprint 1

1 Création Entité + relations
2 Création Fixtures
3 base.html.twig (header, footer)
4 Controllers
    - 4.1 SecurityController (login, logout, ...)
    - 4.2 AdminController(Modérer annonces, avis, users, ...)
    - 4.3 User (espace membre) => 
            UserLeasingController (de l'espace membre)
            AccountController
    - 4.4 HomeController (formulaire de recherche, ...)
    - 4.5 LeasingController (all_annonces, single_annonce, avis users, ...)
5 Formulaire Inscription / Connexion  : FOSUserBundle

6 Home =>   Formulaire de recherche

7 single_Annonce =>    Formulaire: bouton pour louer un véhicule.
                Formulaire: bouton "signaler"

8 all_Annonces =>   Formulaire recherche personnalisé

9 Admin => Formulaire admin: valider ou non une annonce qui vient d'être postée + après édition de l'annonce par le proprio
            Formulaire admin: valider/modérer les commentaires.

10 Espace Perso: 
        => mon compte 
            Formulaire: gestion de ses données personnelles
            + Formulaire "se désinscrire" qui envoie aux admins la demande.
        => mes locations
            - Formulaire: notation propriétaire ("accessible seulement sur mes locations")
        => mes annonces
            - supprimer / éditer annonce
            - Formulaire ajout véhicule
            - Formulaire ajout annonce
            - Formulaire: accepter ou refuser de louer (selon notes par ex).


QueryBuilder:
    Annonces les + récentes
    Commentaires: les derniers meilleurs commentaires
    Localisation des annonces à proximité de chez soi

Calendrier : DatePicker

Page admin: pour modération annonces/users par exemple.


### Sprint 2        
Map

Fonctionnalité : simulation revenus sur une location

Mail confirmation inscription
Mail confirmation location validée
Mail confirmation mise en location validé suite modération
Mail rappel J-2 avant évènement + notification ??
Mail mot de passe oublié
Mail admin avec les stats du site (annonces, users, locations en cours, à venir, coûts....)
A voir: système "ajout en favoris" d'une annonce. Meme système que les likes.( a stocker dans l'entity )

Comment ca marche => à la fin


JS: bouton partage annonce réseaux sociaux
https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview

### Sprint 3
-> revue de code, débug, tests unitaires.
-> filtre insulte/mots interdits (avis + annonces description + noms)

### Présentation