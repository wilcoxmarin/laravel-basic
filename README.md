[![N|Solid](https://www.arsys.es/blog/wp-content/uploads/2015/10/Laravel.png)](https://laravel.com/docs/7.x)
# Que es Laravel?

Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es simple, muy potente y tiene una interfaz elegante y divertida de usar. Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.

### Estructura

Este proyecto o estructura esta compuesto por:

* [Laralvel] - Toda su estructura base!
* [Docker] - Para generar y configurar sus contenedores.
* [laravel websockets] - Para utilizar la parte de tiempor real y con toda su configuracion base en el environment.
* [API Documentation] - Genera documentacion del api.
* [Laravel Debugbar] - Para ver los errores en pantalla mas agradable.

### Instalacion

* Clonar el repositorio.
* Ejecutar el siguiente comando despues de haber clonado el proyecto

```sh
$ cd nombre de la carpeta
$ compose install
```
* Despues copian el env.example y lo renombrar como .env en el env.example esta toda la configuracion del proyecto.
*Despues le generan el key con el siguiente comando 

```sh
$ php artisan key:generate
```

# Comandos para los paquetes 

 # Docker
 
 El proyecto viene con una configuracion base que puedes modificar a tu necesidad, comandos para levantar docker.
 
 ```sh
 $ cd nombre_proyecto
 $ docker build .
 $ docker-compose up -d
 ````
con esos comando ya tiene levantado tus tres contenedores el docker tiene como base de datos postgres.

# Laravel Websockets

Ya el proyecto tiene las configuracion base solo debes modificar el environment que tienes sus variables a configurar que son:

* PUSHER_APP_ID=
* PUSHER_APP_KEY=
* PUSHER_APP_SECRET=
* PUSHER_APP_CLUSTER=
* PUSHER_APP_HOST=
* PUSHER_APP_SCHEME=http

esta configuracion es opcional si trabajar con certificados debes ponerlo en estas variables.

* LARAVEL_WEBSOCKETS_SSL_LOCAL_CERT=
* LARAVEL_WEBSOCKETS_SSL_LOCAL_PK=
* LARAVEL_WEBSOCKETS_SSL_PASSPHRASE=

# API Documentation

Es un paquete para laravel para generar documentacion si tu aplicacion solo es un api, hay un ejemplo en **controllers/Api/PruebaController** hay esta un ejemplo base de como se debe hacer para documentar el codigo y poder generar el api.
Despues de tener su aplicacion terminada y con los comentarios escribe el comando para generar la documentacion.
```sh
$ php artisan apidoc:generate
```
despues de que se genere la documentacion ingresa a la url para verla **example.local/docs/** hay podras ver tu documentacion generada y para modificar y saber mas este es el link
https://laravel-apidoc-generator.readthedocs.io/en/latest/index.html

# Laravel Debugbar

Gran y reconocido paquete, que te ayudara a detectar errores en tu aplicación y optimizar el funcionamiento de la misma, podrás ver el log de tu aplicación mediante una barra incluida en tus vistas, consultas SQL realizadas, estructura de datos rutas y mas.
En el proyecto hay un ejemplo **controllers/Api/PruebaController** de como se usa.

https://github.com/barryvdh/laravel-debugbar