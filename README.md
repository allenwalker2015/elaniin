<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## TEST API 
El objetivo de este repositorio es una muestra de conocimientos sobre el uso y creacion de API mediante el framework Laravel 8.0.

Este proyecto contiene un ejemplo basico de autenticacion mediate OAUTH2.0 usando Passport, asi como CRUDs para Usuarios y Productos.
## Requisitos

- PHP:7.3 
- MySQL:5.7
- Composer


## Pasos para el deployment

1.  Clonar el repositorio

    ```git clone https://github.com/allenwalker2015/elaniin.git```

2.  Moverse al directorio princial del proyecto
    
    ```cd elaniin```
    
3.  Instalar las dependencias de composer
    
    ```php composer install```

4.  Ejecutar las migraciones y seeders

    ```php artisan migrate --seed```

5.  Instalar las dependencias, archivos de configuracion y generacion de llaves para la autenticacion OAUTH2.0 con Passport

    ```php passport:install```

5.  Colocar las variables de entorno necesarias para la conexion a la bd y para el envio de correos

    ```
       .../
       DB_CONNECTION=mysql
       DB_HOST=mysql_url
       DB_PORT=3306
       DB_DATABASE=db_name
       DB_USERNAME=user
       DB_PASSWORD=password
       /...
       .../
       MAIL_MAILER=smtp
       MAIL_HOST=example.mail.server
       MAIL_PORT=2525
       MAIL_USERNAME= your_username
       MAIL_PASSWORD= your_password
       MAIL_ENCRYPTION= tls
       /...
    
    ```

