## documentation

- https://dev.to/cherif_b/using-docker-for-slim-4-application-development-environment-1opm

## rebuild service php

`docker-compose up -d --no-deps --build php`

## build le docker-compose

`docker-compose up -d`

## lancer le docker-compose

`docker-compose start`

## aller dans le contener

`docker exec -it -u $(id -u):$(id -g) slim_php bash`

## lancer le serveur

`php -S 0.0.0.0:8080 public/`
