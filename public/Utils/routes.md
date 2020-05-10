# Routes

| URL | Méthode HTTP | Controller | Méthode |Nom de la route | Num |
|---|---|---|---|---|---|
|`/` | `GET` | `HomeController` | `home` |`show_home`| 1 |
|`/marker/vehicule/all`|`---`|`HomeController`|`allMarker`|`all_vehicle_marker`|22|
|`/contact`|`GET`|`HomeController`|`contactUs`|`contact`|22|
|`/faq`|`GET`|`HomeController`|`faq_show`| `faq` |20|
|`/mentionslegales`|`GET`|`HomeController`|`mentions`| `mentionslegales_show`|21|
|---|---|---|---|---|---|
|`/register` ( modal ) | `GET` | `SecurityController` | `register` | `register` | 2 |
|`/login` ( modal )| `GET` | `SecurityController` | `login`| `app_login` |  3 |
|`/logout`|---| `SecurityController` | `logout`|`app_logout`|---|
|`/resetting/request` ( mot de passe oublié de FOSUser ) | --- | --- |---| --- | 4 |
|---|---|---|---|---|---|
|RECHERCHE D'UNE LOCATION|---|---|---|---|---|
|`/locations`|`GET`|`LeasingController`|`index`| `leasing_index` | 5 |
|`/location/{id}/voir-annonce`|`GET`|`LeasingController`|`showLocation`| `show_leasing` | 6 |
|`/location/{id}/reservation`|`POST`|`LeasingController`|`showReservation`| `show_reservation` |  |
|`/location/alert`|`GET`|`LeasingController`|`signal`| `annonce_signal` |  |
|---|---|---|---|---|---|
|PAGE MES LOCATIONS|---|---|---|---|---|
|`/user/{booking}/avis`|`GET`|`User\UserLeasingController`|`addReview`| `add_review` | 7 |
|`/user/renter/locations`|`GET`|`User\UserLeasingController`|`showRental`| `user_rental` |  |
|`/user/owner/locations`|`GET`|`User\UserLeasingController`|`showOwnerHistoric`| `owner_historic` |  |
|---|---|---|---|---|---|
|PAGE MES INFORMATIONS PERSONNELLES |---|---|---|---|---|
|`/user/informations-personnelles/editer`|`GET`|`User\AccountController`|`updatePersonalInformation`| `user_information` | 15 + 17 |
|`/user/user/delete`|`POST`|`User\AccountController`|`deleteUser`| `unsubscribe_ask` |  |
|---|---|---|---|---|---|
|PAGE MES ANNONCES |---|---|---|---|---|
|`/user/annonces`|`GET`|`User\UserLeasingController`|`userPost`| `user_post` | 12 |
|`/user/vehicules`|`GET`|`User\UserLeasingController`|`userVehicleList`| `user_vehicles` |  |
|`/user/annonce`|`POST`|`User\UserLeasingController`|`userSingleAnnonce`| `user_single_annonce` |  |
|`/user/annonce/accepte-location`|`POST`|`User\UserLeasingController`|`acceptBooking`| `user_accept_booking` |  |
|`/user/annonce/refuser-location`|`POST`|`User\UserLeasingController`|`denyBooking`| `user_refuse_booking` |  |
|`/louer-son-vehicule`|`GET`|`User\UserLeasingController`|`vehicleLeasingForm`|`vehicle_leasing_form`| 8 |
|`/user/annonce/delete`|`POST`|`User\UserLeasingController`|`deletePost`| `annonce_delete` |  |
|`/user/vehicle/edit`|`GET`|`User\UserLeasingController`|`vehicleEdit`| `vehicle_edit` |  |
|---|---|---|---|---|---|
|PAGE ADMIN|---|---|---|---|---|
|`/admin/`|`GET` | `Admin\AdminController`| `index` |`admin`|18|
|`/admin/type`|`GET` | `Admin\AdminController`| `indexType` |`all_type`|18|
|`/admin/type/add`|`GET` | `Admin\AdminController`| `newType` |`add_type`|18|
|`admin/type/type/delete`|`POST` | `Admin\AdminController`| `deleteType` |`type_delete`|18|
|`admin/user`| `GET` | `Admin\AdminController` | `indexUser` | `all_users` | 18 |
|`admin/comments`| `GET` | `Admin\AdminController` | `allComments` | `all_comments` | 18 |
|`admin/comment/comment/delete`| `POST` | `Admin\AdminController` | `deletecomment` | `comment_delete` | 18 |






