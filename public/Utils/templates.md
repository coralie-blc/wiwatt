# les templates

| Par catégories | descriptif | templates |
|---|---|---|
|LA BASE|
||La home| `home/index.html.twig`|
|| contact|`home/contact.html.twig`|
||faq|`home/faq.html.twig`|
||mentions légales|`home/mentions_legales.html.twig`|
||inscription|`security/register_mobile.html.twig`|
||||
|RECHERCHE D'UNE LOCATION|
 ||affiche tous les vehicules selon la demande  |`leasing/index.html.twig`|
||page 1 seule annonce|`leasing/show_leasing.html.twig`|
||||
|VOTRE COMPTE|||
|Mes informations personnelles||`user/account/index.html.twig`|
|Mes annonces|liste des annonces|`user/user_leasing/own_vehicle.html.twig`|
||vue d'une seule annonce|`user/user_leasing/single_annonce.html.html.twig`|
|Mes locations ( locataire )| liste des locations|`user/user_leasing/vehicle_rent.html.twig`|
|| ajoute un commentaire|`user/user_leasing/add_review.html.twig`|
|Mes locations ( propriétaire )|liste de mes locations |`user/user_leasing/owner_historic.html.twig`|
|Mes vehicules|liste de mes véhicules|`user/user_leasing/user_vehicles.html.twig`|
||editer un vehicule|`user/user_leasing/vehicle_edit.html.twig`|
|louer son vehicule||`user/user_leasing/leasing_vehicle.html.twig`|
||||
|ADMIN|
||index admin|`admin/admin/index.html.twig`|
||liste des types|`admin/admin/type.html.twig`|
||ajouter un type|`admin/admin/type.html.twig`|
||liste des inscrits|`admin/admin/user.html.twig`|
||liste des commentaires|`admin/admin/comment.html.twig`|
||||
|PARTIALS|
|Modal|s'enregistrer|`partials/modals/sign-up.html.twig`|
|Modal|se connecter|`partials/modals/log-in.html.twig`|
||nav du compte|`partials/account_nav.html.twig`|
||une carte|`partials/card.html.twig`|
||une carte complète|`partials/card-full.html.twig`|
||une carte véhicule|`partials/vehicle-card.html.twig`|
||footer|`partials/footer.html.twig`|
|base||`base.html.twig`|
||||
|SWIFT MAILER|
||confirmation de réservation|`emails/accept_booking.html.twig`|
||demande de réservation|`emails/ask_booking.html.twig`|
||refus d'une réservation|`emails/refuse_booking.html.twig`|





