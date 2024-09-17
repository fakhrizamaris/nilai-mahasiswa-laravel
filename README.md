<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD Nilai Mahasiswa

#### Version 1.0

#### Deskripsi

Ini adalah proyek dashboard sederhana menggunakan template Sbadmin2 untuk mengelola data nilai mahasiswa. Aplikasi ini memungkinkan admin untuk melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data mahasiswa dengan kolom berikut: 'nama', 'nim', 'jurusan', dan 'nilai'.

#### Teknologi yang Digunakan

- Laravel Framework: Laravel 8
- Database: MySQL
- sb-admin-2

#### Requirements

- XAMPP : PHP >= 8.0.0
- Laravel: V.8
- Google Chrome >= 89.0.4389.114

#### Instalation

```
### Clone repositori ini:
git clone https://github.com/mhmdfrhn/laravel-crud.git

### Masuk ke direktori proyek:
cd repo-dashboard-nilai-mahasiswa

### Install dependensi menggunakan Composer:
composer install

### Install dependensi menggunakan Composer:
composer install

### Salin file .env.example menjadi .env:
cp .env.example .env

### Generate kunci aplikasi Laravel:
php artisan key:generate

### Konfigurasi file .env sesuai dengan pengaturan database MySQL Anda:
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

### php artisan migrate
php artisan migrate

### Jalankan server Laravel:
php artisan serve

### Buka aplikasi di browser dengan mengakses:
http://localhost:8000/.
```

### Usage

Berikut adalah langkah-langkah untuk menggunakan aplikasi CRUD Nilai Mahasiswa:

1. Tambahkan data mahasiswa baru dengan mengklik tombol "Tambah Mahasiswa" dan mengisi formulir yang sesuai dengan kolom 'nama', 'nim', 'jurusan', dan 'nilai'.
2. Lihat daftar mahasiswa yang ada dengan mengklik tombol "Lihat Mahasiswa".
3. Untuk memperbarui data mahasiswa, klik tombol "Edit" di samping entri mahasiswa yang ingin diperbarui, lalu perbarui informasi yang diinginkan dalam formulir.
4. Untuk menghapus data mahasiswa, klik tombol "Hapus" di samping entri mahasiswa yang ingin dihapus dan konfirmasikan penghapusan.
5.

### Notes

Pastikan Anda telah mengkonfigurasi koneksi database MySQL dengan benar di file .env dan telah menjalankan migrasi database sebelum menggunakan aplikasi ini.

Selain itu, pastikan Anda telah memahami Laravel 8 dan template dashboard Sbadmin2 untuk melakukan penyesuaian dan pengembangan lebih lanjut sesuai kebutuhan proyek Anda.

Semoga informasi ini bermanfaat untuk Anda dalam mendokumentasikan proyek CRUD Nilai Mahasiswa menggunakan template dashboard Sbadmin2 dan Laravel 8.
