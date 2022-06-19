# -Gonzalez_Chavez_Eddy_Hito4
Ir a directorio idealCruceros

Primero
composer install

Segundo
npm install

Tercero
Crear base de datos en phpMyadmin: idealCruceros
Una vez creada la base de datos, copiar el contenido del archivo .env.copy
en el .env desde visual studio

Cuarto
generar una clave e insertarla automátciamente en el .env:
php artisan key:generate

Quinto
ejecutar las migraciones y seeders: php artisan migrate --seed
