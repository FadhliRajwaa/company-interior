# Company Interior - Laravel Web Application

Aplikasi web Company Profile untuk perusahaan interior design yang dibangun menggunakan Laravel 12, MySQL, dan Tailwind CSS.

## Fitur Utama

### Halaman Publik
- **Home**: Halaman utama dengan hero section dan layanan
- **History**: Timeline sejarah perusahaan
- **Portfolio**: Galeri proyek dengan lightbox
- **Location**: Lokasi kantor dengan Google Maps
- **Contact**: Form kontak dengan FAQ

### Dashboard Terautentikasi
- **Owner Dashboard**: Panel kontrol untuk pemilik
  - Statistik aplikasi
  - Manajemen progress update (CRUD)
  - Kelola customer
- **Customer Dashboard**: Panel untuk customer
  - Lihat progress proyek pribadi
  - Status update terbaru

## Instalasi

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

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi database di .env**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=company_interior
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Migrasi database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Buat direktori upload**
   ```bash
   mkdir -p public/images/company
   mkdir -p public/images/portfolio
   mkdir -p public/images/progress
   ```

7. **Compile assets**
   ```bash
   npm run dev
   ```

8. **Jalankan server**
   ```bash
   php artisan serve
   ```

## Akun Test

### Owner Account
- **Email**: owner@interior.com
- **Password**: password
- **Role**: owner (dapat mengelola progress updates)

### Customer Accounts
- **Email**: john@example.com
- **Password**: password
- **Role**: customer

- **Email**: jane@example.com
- **Password**: password
- **Role**: customer

## Struktur Direktori

```
app/
├── Http/Controllers/
│   ├── HomeController.php          # Halaman publik
│   ├── ContactController.php       # Form kontak
│   ├── PortfolioController.php     # Portfolio galeri
│   ├── DashboardController.php     # Dashboard role-based
│   └── ProgressUpdateController.php # CRUD progress
├── Models/
│   ├── User.php                    # User dengan role
│   ├── Contact.php                 # Kontak form
│   ├── Portfolio.php               # Portfolio items
│   └── ProgressUpdate.php          # Progress tracking
database/
├── migrations/
│   ├── add_role_to_users_table.php
│   ├── create_contacts_table.php
│   ├── create_portfolios_table.php
│   └── create_progress_updates_table.php
public/
├── images/
│   ├── company/                    # Logo, about images
│   ├── portfolio/                  # Portfolio images
│   └── progress/                   # Progress photos
resources/
├── views/
│   ├── layouts/
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
