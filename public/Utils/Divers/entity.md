## Préparation MCD

# User  => make:auth
email 
owner: boolean // proprio
renter: boolean     // locataire
firstname
lastname
avatar
password
département
zip_code
city
street_name
street_number
longitude
latitude
phone_number
average_score
visible_status : boolean  
created_at
updated_at



# Comment
user_id (concerne tel proprio)
content
score: /5
current_user_id
created_at
updated_at


# Vehicle
type_id
user_id
brand
model
passenger_number
picture = [] 
max_speed
weight
power // puissance
autonomy
status (boolean)
half_day_cost   // prix demie journée
created_at
updated_at



# Type Vehicle
name
created_at
updated_at

Vehicle: name

# Post
user_id
vehicule_id
 
title
content
status (boolean)
date = [] 
created_at
updated_at



# Booking
renter_id
owner_id
vehicle_id
vehicle_cost
half_day_number
total_price
status
created_at
updated_At


### Relations
1 USER peut avoir many vehicules
1 vehicule peut avoir 1 USER
Donc USER -> VEHICULE : ManyToOne
ou VEHICLE -> USER : OneToMany

1 type peut avoir many vehicules
1 véhicule peut avoir ONE type
Donc TYPE -> VEHICULE : ManyToOne


1 USER peut avoir many annonces
1 annonce peut avoir 1 USER
Donc USER -> ANNONCE: ManyToOne


1 USER peut avoir many comments
1 comment n'a qu'un seul USER
USER -> comment : ONETOMANY

1 ANNONCE n'a qu'UN seul VEHICULE.
1 VEHICULE n'a qu'UNE seule ANNONCE.
ANNONCE -> VEHICULE : ONETOONE



VEHICLE 11 has 1N TYPE             TYPE ->ONETOMANY -> VEHICLE
VEHICLE 11 has 0N USER             USER ->ONETOMANY -> VEHICLE
VEHICLE 0N has 11 POST             VEHICLE -> ONETOMANY -> POST
VEHICLE 0N has 11 BOOKING          VEHICLE -> ONETOMANY -> BOOKING 

USER 0N has 11 POST                 USER -> ONETOMANY -> POST
USER 0N has 11 COMMENT              USER -> ONETOMANY -> COMMENT
USER 0N has owner 11 BOOKING        USER owner -> ONETOMANY -> BOOKING
USER 0N has renter 11 BOOKING       USER renter -> ONETOMANY -> BOOKING



### MCD 1
POST: id, user_id, vehicle_id, type_id, title, content, status, date, created_at, updated_at
WRITE, 0N USER, 11 POST
USER: id, email, owner_status, renter_status, firstname, lastname, avatar, password, department, zip_code, city, street_name, street_number, longitude, latitude, average_score, visible_status, created_at, updated_at
DETAILS, 0N USER, 11 COMMENT
COMMENT: id, user_id, score, content, current_user_id, created_at, updated_at

DESCRIBE, 0N VEHICLE, 11 POST
VEHICLE: id, type_id, user_id, brand, model, passenger_number, picture, max_speed, weight, power, autonomy, half_day_cost, status, created_at, updated_at
BELONGS, 11 VEHICLE, 0N USER
RENT, 0N USER, 11 BOOKING
OWN, 0N USER, 11 BOOKING

TYPE: id, name, created_at, updated_at
HAS, 11 VEHICLE, 1N TYPE
BOOKED, 0N VEHICLE, 11 BOOKING
BOOKING: id, renter_id, owner_id, vehicle_id, vehicle_cost, half_day_number, total_price, status, created_at, updated_at
:



### MCD corrigé:
IS, 11 BOOKING, 1N BOOKINGSTATUS
BOOKINGSTATUS: id, name
DESCRIBE, 11 PICTURE, 1N VEHICLE
PICTURE: id, image, vehicle_id

CONTAINS, 1N BOOKING, 01 DATE
BOOKING: id, renter_id, owner_id, day_number, total_price, status, created_at, updated_at
BOOKED, 0N VEHICLE, 11 BOOKING
VEHICLE: id, type_id, user_id, brand, model, seat_number, max_speed, weight, power, autonomy, day_cost, description, status, created_at, updated_at
HAS, 11 VEHICLE, 1N TYPE
TYPE: id, name, created_at, updated_at

OWN, 0N USER, 11 BOOKING
RENT, 0N USER, 11 BOOKING
BELONGS, 11 VEHICLE, 0N USER
AVAILABLE, 1N VEHICLE, 11 DATE

USER: id, email, firstname, lastname, avatar, password, zip_code, city, street_name, longitude, latitude, average_score, visible_status, role, created_at, updated_at
TAKE, 1N USER, 01 DATE
DATE: id, available_date, booking_id, vehicle_id, renter_id

OWNER, 0N USER, 11 COMMENT
COMMENT: id, owner_id, renter_id, score, content, created_at, updated_at
RENTER, 0N USER, 11 COMMENT

### MCD 3 :
PICTURE: id, image, vehicle_id
DESCRIBE, 11 PICTURE, 1N VEHICLE
:
RENTER, 0N USER, 11 COMMENT
COMMENT: id, owner_id, renter_id, score, content, created_at, updated_at

HAS, 11 VEHICLE, 1N TYPE
VEHICLE: id, type_id, user_id, brand, model, seat_number, max_speed, weight, power, autonomy, half_day_cost, description, zip_code, city, street_name, longitude, latitude, status, created_at, updated_at
BELONGS, 11 VEHICLE, 0N USER
USER: id, email, firstname, lastname, avatar, password, phone_number, average_score, visible_status, role, created_at, updated_at
OWNER, 0N USER, 11 COMMENT

TYPE: id, name, created_at, updated_at
AVAILABLE, 1N VEHICLE, 11 DATE
BOOKED, 0N VEHICLE, 11 BOOKING
RENT, 0N USER, 11 BOOKING
BOOKINGSTATUS: id, name

:
DATE: id, available_date, booking_id, vehicle_id
CONTAINS, 1N BOOKING, 01 DATE
BOOKING: id, renter_id, vehicle_id, status_id, day_number, total_price, status, created_at, updated_at
IS, 11 BOOKING, 1N BOOKINGSTATUS