# Bloging (Laravel Blog App)

A simple blog application built with **Laravel**.
Supports user authentication, CRUD operations for posts with image uploads and a clean **Bootstrap** UI.

## 🚀 Features

* Public post listing & single post view (`/post/card/{id}`)
* User registration, login and logout
* Dashboard for managing posts
* Image upload and display via `php artisan storage:link`

## ⚙️ Installation

```bash
# Clone the repository
git clone https://github.com/ukmuniweera/Bloging.git
cd bloging-laravel

# Install dependencies
composer install

# Copy and configure environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations and seeders
php artisan migrate --seed

# Link storage folder for public access
php artisan storage:link

# Serve the application locally
php artisan serve
```

## 📄 Example `.env`

```env
APP_NAME=Bloging
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bloging_db
DB_USERNAME=root
DB_PASSWORD=
FILESYSTEM_DISK=public
```

> Make sure your database `bloging_db` exists before running migrations.

## 🔗 Routes

| Route             | Description           | Access              |
| ----------------- | --------------------- | ------------------- |
| `/`               | All posts             | Public              |
| `/post/card/{id}` | Single post view      | Public              |
| `/login`          | User login            | Public              |
| `/register`       | User registration     | Public              |
| `/dashboard`      | User dashboard        | Authenticated users |
| `/allposts`       | Manage posts          | Authenticated users |
| `/post/create`    | Create a new post     | Authenticated users |
| `/post/edit/{id}` | Edit an existing post | Authenticated users |

---
