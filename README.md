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
- **Editor**: create, read, edit permissions,
- **Viewer**: Faqat read permission

### Sahifalar

- `/posts` – Postlar ro'yxati
- `/posts/create` – Yangi post yaratish (title, content, image yuklash mumkin)
- `/posts/{id}` – Postni ko'rish
- `/posts/{id}/edit` – Postni tahrirlash (image o'zgartirish mumkin)

## Xususiyatlar

- Role va permission boshqarish (Spatie Laravel Permission)
- Post yaratish, ko'rish, tahrirlash, o'chirish
- Rasm yuklash va ko'rsatish (JPG, PNG, GIF, maksimal 2MB)
- Responsive UI (Bootstrap 5)
- Autentifikatsiya va avtorizatsiya

## Rasm Yuklash

Postlarga rasm qo'shish mumkin:

- Formatlar: JPG, PNG, GIF
- Maksimal hajm: 2MB
- Saqlanish joyi: `storage/app/public/posts`
- Ko'rsatish: `storage/` link orqali

## Qo'shimcha

Agar muammo yuzaga kelsa, quyidagilarni tekshiring:

- PHP va Composer versiyasi
- Ma'lumotlar bazasi ulanishi
- Permission va role migratsiyalari
