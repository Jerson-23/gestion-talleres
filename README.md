# gestion-talleres
examen final desarrollo web 
# Gestión de Talleres

Este proyecto es una aplicación de gestión de talleres, diseñada para facilitar la administración de talleres mecánicos. Proporciona funcionalidades para la gestión de clientes, vehículos, órdenes de trabajo y facturación.

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el desarrollo de aplicaciones web.
- **MySQL**: Sistema de gestión de bases de datos relacional.
- **Bootstrap**: Framework de CSS para el diseño y desarrollo responsivo.
- **JavaScript**: Lenguaje de programación para la interacción en el cliente.
- **PHP**: Lenguaje de programación para el desarrollo del backend.

## Instalación

1. Clonar el repositorio:

```sh
git clone https://github.com/tu-usuario/gestion-de-talleres.git
cd gestion-de-talleres
Instalar las dependencias de PHP y JavaScript:

sh
composer install
npm install
Configurar el archivo .env:

sh
cp .env.example .env
php artisan key:generate
Configurar la base de datos en el archivo .env:

dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydb
DB_USERNAME=root
DB_PASSWORD=
Ejecutar las migraciones y sembrar la base de datos:

sh
php artisan migrate --seed
Iniciar el servidor de desarrollo:

sh
php artisan serve
