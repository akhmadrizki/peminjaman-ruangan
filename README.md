# Peminjaman Ruangan (API)
Repository for Peminjaman Ruangan API version


### Berikut langkah awalnya !
1. Clone Repository ini
```sh
$ git clone https://github.com/akhmadrizki/peminjaman-ruangan.git
```
2. Copy file `.env.example` menjadi `.env`:
```sh
$ cp env-example .env
```
3. Install seluruh package agar bisa dijalankan
```sh
$ composer install
```
4. Setup database. Lalu isi konfigurasinya di `.env` sesuai pengaturan database. Contoh:
```sh
...
DB_DATABASE=test_api
DB_USERNAME=root
DB_PASSWORD=
...
```
5. Jalankan command berikut:
```sh
$ php artisan key:generate
$ composer dump-autoload
$ php artisan migrate
$ php artisan storage:link
```
6. Jika ingin menjalankan aplikasi, jalankan command berikut:
```sh
$ php artisan serve
```
7. Setelah men run ``` $ php artisan serve ```:
Silahkan jalankan di aplikasi POSTMAN atau sejenisnya
### Link URL localhost:8000/api/...


## Terimakasih Akhmad Rizki & Team
