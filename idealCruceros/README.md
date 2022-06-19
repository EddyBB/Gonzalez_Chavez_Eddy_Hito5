# -Gonzalez_Chavez_Eddy_Hito4
Ir a directorio raíz del proyecto y seguir los pasos

Primero
composer install

Segundo
npm install

Tercero
Crear base de datos en phpMyadmin: idealCruceros
Una vez creada la base de datos, copiar el archivo .env.example
y renombrarlo a .env y editar la conexión a la base de datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=idealCruceros
DB_USERNAME=root
DB_PASSWORD=root

Cuarto
generar una clave, para crear la nueva e insertarla automátciamente en el .env:
php artisan key:generate

Quinto
ejecutar las migraciones: php artisan migrate
