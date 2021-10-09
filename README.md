<h1>Project Web Framework</h1>

## Sistem Sewa Lapangan Futsal Online Berbasis Web
- Sigit Hermawan
- 1810817210018
- Sebuah situs web yang dibuat untuk membantu sistem penyewaan lapangan futsal

## Requirements
1. Minimal PHP Versi 7.3
2. Telah Menginstal Composer

## Installation
1. Clone repository ini dengan menggunakan command berikut:
    ```
    git clone https://github.com/sgthrmwn05/ProjectWebFramework.git
    ```
2. Ubah file ```.env.example ``` menjadi ```.env``` dan sesuaikan dengan database yang dibuat.

3. Install depensi PHP dengan menggunakan command berikut:
    ```
    composer install
    ```
4. Generate app key baru dengan menggunakan command berikut:
    ```
    php artisan key:generate
    ```
5. Persiapkan database yang akan digunakan dengan menggunakan command berikut:
    ```
    php artisan migrate
    ```
6. Jalankan website yang dibuat secara lokal dengan menggunakan command berikut:
    ```
    php artisan serve