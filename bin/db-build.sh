#!/bin/bash

#éqyuivalent migrate: fresh 
#php artisan db:wipe
#php artisan migrate

php artisan migrate:fresh

# Sans sparamètre, c'est la classe DatabaseSeeder qui est utilisée
php artisan db:seed
