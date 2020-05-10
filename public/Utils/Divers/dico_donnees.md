## Picture
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|image|...|INT UNSIGNED|NOT NULL|...|

## Booking
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|vehicle_cost |..|INT UNSIGNED|NOT NULL|...|
|date|...|TEXT|NULL|...| TABLEAU
|half_day_number|...|TINY_INT|NOT NULL|...|
|total_price|tarif x nombre demies journées|INT|NOT NULL|...|
|status|...|string|NOT NULL - default "à venir"|stock 3 statuts( à venir, en cours, terminé ) |
|created_at|...|DATETIME|NOT NULL|...|
|updated_at|...|DATETIME|NULL|...|


## User
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|email|...|VARCHAR(256)|NOT NULL|...|
|password|...|TEXT|...|...|
|roles|...|LONGTEXT|NOT NULL|...|
|firstname|...|VARCHAR(30)|NOT NULL|...|
|lastname|...|VARCHAR(30)|NOT NULL|...|
|avatar|...|TEXT|NOT NULL|...|
|average_score|...|TINY_INT UNSIGNED|NULL|...|
|visible_status|utilisateur banni/non|BOOLEAN|NOT NULL - default: 1|...|
|created_at|...|DATETIME|NOT NULL|...|
|updated_at|...|DATETIME|NULL|...|
|phone_number|...|INT UNSIGNED|NULL|...|


## Comment
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|user_id|...|INT UNSIGNED|NOT NULL|...|
|content|...|TEXT|NOT NULL|...|
|score|...|TINY_INT UNSIGNED|NULL|...
|current_user_id|...|INT|NOT NULL|...|
|created_at|...|DATETIME|NOT NULL|...|
|updated_at|...|DATETIME|NULL|...|


## Vehicle
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|brand|...|VARCHAR(30)|NOT NULL|...|
|model|...|VARCHAR(30)|NOT NULL|...|
|seat_number|...|TINY_INT UNSIGNED|NOT_NULL|...|
|max_speed|...|TINY_INT UNSIGNED|NOT NULL|...|
|weight|...|INT UNSIGNED|NOT NULL|...|
|power|...|INT UNSIGNED|NOT NULL|...|
|autonomy|...|INT UNSIGNED|NOT NULL|...|
|day_cost|...|TINY_INT UNSIGNED|NOT NULL|...|
|status|...|TINY_INT UNSIGNED|NOT NULL|...|
|created_at|...|DATETIME|NOT NULL|...|
|updated_at|...|DATETIME|NULL|...|
|description|...|VARCHAR(256)|NULL|...|
|longitude|...|FLOAT SIGNED|NOT NULL|...|
|latitude|...|FLOAT SIGNED|NOT NULL|...|
|zip_code|...|INT UNSIGNED|NOT NULL|...|
|city|...|VARCHAR(255)|NOT NULL|...|
|adress|...|TEXT|NOT NULL|...|


## BookingStatus
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|name|...|STRING|NOT NULL - default: 1|...|




## Type
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|name|...| STRING |NOT NULL|...|
|created_at|...|DATETIME|NOT NULL|...|
|updated_at|...|DATETIME|NULL|...|



## Date 
|Nom|Description|Type|Commentaire|Entité|
|--|--|--|--|--|
|availableDate|...|DATETIME|NOT NULL|...|



