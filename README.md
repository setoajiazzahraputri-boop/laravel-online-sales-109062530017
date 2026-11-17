# Laravel Online Sales

Aplikasi praktikum penjualan online (Admin dan Pelanggan) berbasis Laravel.

## Kebutuhan

- PHP 8.2 atau lebih baru, Composer, MySQL/MariaDB, Git

## Instalasi

```bash
git clone (url-repository) laravel-online-sales
cd laravel-online-sales
composer install
copy .env.example .env   # di Linux/macOS: cp .env.example .env
php artisan key:generate
# buat database laravel_online_sales lalu atur DB_* pada .env
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

Pastikan file `public/css/store.css` tersedia.

## Akun latihan

- Admin: `admin@example.com` / `Admin12345!`
- Pelanggan: daftar melalui `/register`

## Pengujian

Ikuti checklist M8.4 pada modul praktikum.