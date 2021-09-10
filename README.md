# Dashboard Monitoring Migrasi

### Instalasi Project

Yang harus disiapkan

-   Server (XAMPP / MAMP)
-   PHP
-   Composer
-   Node.JS
-   Laravel Basic
-   npm / yarn

Cara setup project

-   clone project
-   buka cmd / cli
-   jalankan perintah `composer install`
-   jalankan perintah `npm install` atau `yarn install`
-   copy paste file `.env.example`dan rename menjadi `.env`
-   sesuaikan isi dari `.env`
-   jalankan `php artisan key:generate`
-   jalankan migrasi db `php artisan migrate`

Cara menjalankan project

-   Buka cmd / cli
-   jalankan perintah `php artisan serve`
-   buka localhost:8000 (default ip project)
