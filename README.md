<p align="center">
  <img src="public/images/company/logo.png" alt="Company Interior Logo" width="120"/>
</p>

# 🚀 Company Interior - Laravel Web Application

Aplikasi web Company Profile untuk perusahaan interior design, dibangun dengan **Laravel 12**, **MySQL**, dan **Tailwind CSS**.

---

## ✨ Fitur Utama

- **Landing Page**: Hero, layanan, sejarah, galeri portfolio, lokasi (Google Maps), kontak & FAQ.
- **Dashboard Owner**: Statistik, manajemen progress, kelola customer.
- **Dashboard Customer**: Lihat progress proyek pribadi & update status.
- **Role System**: Owner & Customer.
- **Upload Gambar**: Portfolio, company, progress.
- **Autentikasi**: Laravel Breeze.

---

## 🛠️ Instalasi Lokal

1. **Clone repositori**
   ```bash
   git clone [repository-url]
   cd company-interior
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Copy & konfigurasi environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit `.env` untuk database:
   ```
   DB_DATABASE=company_interior
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Migrasi & seed database**
   ```bash
   php artisan migrate --seed
   ```

5. **Buat folder upload**
   ```bash
   mkdir -p public/images/company public/images/portfolio public/images/progress
   ```

6. **Compile assets**
   ```bash
   npm run dev
   ```

7. **Jalankan server**
   ```bash
   php artisan serve
   ```

---

## 🔑 Akun Demo

- **Owner**: owner@interior.com / password
- **Customer**: john@example.com / password, jane@example.com / password

---

## 📁 Struktur Direktori (Singkat)

- `app/Http/Controllers/` - Controller utama
- `app/Models/` - Model data
- `database/migrations/` - Struktur tabel
- `public/images/` - Upload gambar
- `resources/views/` - Blade templates

---

## ⚡ Perintah Penting

- Watch assets: `npm run dev`
- Build production: `npm run build`
- Jalankan test: `php artisan test`

---

## 🌐 Deployment

1. Upload ke server
2. Install dependencies: `composer install --optimize-autoloader --no-dev`
3. Setup database dan migrasi
4. Build assets: `npm run build`
5. Set permissions untuk storage dan bootstrap/cache
6. Configure web server ke `/public`

---

## 📸 Screenshot

> _Tambahkan screenshot aplikasi di sini untuk tampilan lebih menarik_

---

## Support

Untuk bantuan dan pertanyaan, hubungi tim development.

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
│   │   ├── app.blade.php          # Layout authenticated
│   │   └── public.blade.php       # Layout public
│   ├── dashboard/
│   │   ├── owner.blade.php        # Owner dashboard
│   │   └── customer.blade.php     # Customer dashboard
│   ├── progress/
│   │   ├── index.blade.php        # List progress
│   │   ├── create.blade.php       # Form create
│   │   └── edit.blade.php         # Form edit
│   ├── home.blade.php             # Landing page
│   ├── history.blade.php          # Company history
│   ├── portfolio.blade.php        # Portfolio gallery
│   ├── location.blade.php         # Location & maps
│   └── contact.blade.php          # Contact form
```

## Fitur Progress Management

### Untuk Owner
- Buat progress update baru untuk customer
- Edit/hapus progress existing
- Upload foto progress
- Lihat semua progress di sistem

### Untuk Customer
- Lihat progress proyek pribadi
- Detail progress dengan foto
- Filter berdasarkan tanggal

## Upload Gambar

### Portfolio
Letakkan file gambar di `public/images/portfolio/` untuk ditampilkan di halaman portfolio.

### Company
Letakkan logo dan gambar perusahaan di `public/images/company/`.

### Progress
Gambar progress akan otomatis diupload ke `public/images/progress/` melalui form.

## Role System

- **Owner**: Akses penuh, dapat mengelola progress updates
- **Customer**: Akses terbatas, hanya melihat progress pribadi

## Teknologi

- **Backend**: Laravel 12
- **Frontend**: Blade Templates + Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **File Upload**: Laravel File System

## Development

```bash
# Watch assets
npm run dev

# Build for production
npm run build

# Run tests
php artisan test
```

## Deployment

1. Upload file ke server
2. Install dependencies: `composer install --optimize-autoloader --no-dev`
3. Setup database dan migrasi
4. Build assets: `npm run build`
5. Set permissions untuk storage dan bootstrap/cache
6. Configure web server ke `/public`

## Support

Untuk bantuan dan pertanyaan, hubungi tim development.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
