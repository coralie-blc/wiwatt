# Routes

| URL | Méthode HTTP | Controller | Méthode |Nom de la route | Num |
|---|---|---|---|---|---|
|`/` | `GET` | `HomeController` | `home` |`show_home`| 1 |
|`/inscription` | `GET` | `SecurityController` | `signIn` | `sign_in` | 2 |
|`/connexion` | `GET` | `SecurityController` | `signUp`| `sign_up` |  3 |
|`/mot-de-passe-oublie` | `GET` | `SecurityController` |`passwordForgot`| `forgot_pass` | 4 |
|`/locations`|`GET`|`LeasingController`|`index`| `leasing_index` | 5 |
|`/location/{id}/voir-annonce`|`GET`|`LeasingController`|`showLocation`| `show_leasing` | 6 |
|`/location/reservation`|`GET`|`LeasingController`|`showReservation`| `show_reservation` |  |
|`/details/{user}`|`GET`|`UserController`|`viewTenant`| `user_reviews` | 7 |
|`/louer-son-vehicule`|`GET`/`POST`|`LeasingController`|`vehiculeLeasingForm`|`vehicule_leasing_form`| 8 |
|`/user`| `GET` | `UserController` | `userIndex` | `user_index` | 9 |
|`/user/locations`|`GET`|`UserController`|`showRental`| `user_rental` |10|
|`/user/location/{user}/avis`|`GET`|`UserController`|`addReview`|`add_review`| 11 |
|`/user/annonces`|`GET`|`UserController`|`userPost`| `user_post` | 12 |
|`/user/annonce/{id}`|`GET`|`UserController`|`userSinglePost`| `user_single_post` | 13 |
|`/user/annonce/vehicle/delete`|`DELETE`|`UserController`|`deletePost`| `vehicle_delete` |  |
|`/user/informations-personnelles`|`GET`|`UserController`|`userInformation`|`user_information` | 16 |
|`/user/informations-personnelles/editer`|`GET`|`UserController`|`updatePersonalInformation`| `update_info` | 17 |
|`/admin/administration`|`x` | `AdminController`| `x` |`administration`|18|
|`/admin/type`|`GET` | `AdminController`| `indexType` |`all_type`|x|
|`/admin/type/add`|`GET` | `AdminController`| `newType` |`add_type`|x|
|`/admin/type/add`|`POST` | `AdminController`| `deleteType` |`type_delete`|x|
|`/faq`|`GET`|`HomeController`|`showFaq`| `faq` |20|
|`/conditions-generales`|`GET`|`HomeController`|`showConditionsGenerales`| `show_cg`|21|
|`/contact`|`GET`|`HomeController`|`contactUs`|`contact`|22|
