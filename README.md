# Laravel Role Permission System

Bu loyiha Laravel framework yordamida role va permission boshqarish tizimini amalga oshiradi. Spatie Laravel Permission paketi ishlatilgan.

## Texnologiyalar

- **Laravel** 11.x
- **PHP** 8.1+
- **Spatie Laravel Permission** paket
- **Bootstrap 5** (UI uchun)
- **SQLite/MySQL** (ma'lumotlar bazasi)

## O'rnatish

1. **Loyihani klonlash:**

    ```bash
    git clone <repository-url>
    cd Role_Permission
    ```

2. **Paketlarni o'rnatish:**

    ```bash
    composer install
    npm install
    ```

3. **Muhit faylini sozlash:**
   `.env` faylini nusxalash va sozlash:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Ma'lumotlar bazasini yaratish:**
    - `.env` faylida `DB_CONNECTION=sqlite` yoki MySQL sozlamalarini kiriting.
    - Agar SQLite bo'lsa:
        ```bash
        touch database/database.sqlite
        ```

5. **Migratsiya va seeder ishga tushirish:**

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

6. **Assetlarni build qilish:**

    ```bash
    npm run build
    ```

7. **Serverni ishga tushirish:**
    ```bash
    php artisan serve
    ```

## Foydalanish

### Login

Test userlar:

- **Editor**: test@example.com / password (create, read, edit qila oladi)
- **Viewer**: viewer@example.com / password (faqat read qila oladi)

Login sahifasi: `http://localhost:8000/login`

### Rollar va Permissions

- **Admin**: Barcha permissions (create, read, edit, delete)
- **Editor**: create, read, edit permissions
- **Viewer**: Faqat read permission

### Sahifalar

- `/posts` – Postlar ro'yxati
- `/posts/create` – Yangi post yaratish
- `/posts/{id}` – Postni ko'rish
- `/posts/{id}/edit` – Postni tahrirlash

## Arxitektura

- **Model**: User, Post
- **Controller**: PostController (resource controller)
- **Middleware**: Auth
- **Views**: Blade templates Bootstrap bilan
- **Routes**: Web routes

## Qo'shimcha

Agar muammo yuzaga kelsa, quyidagilarni tekshiring:

- PHP va Composer versiyasi
- Ma'lumotlar bazasi ulanishi
- Permission va role migratsiyalari

## Litsenziya

Bu loyiha MIT litsenziyasi ostida.

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
