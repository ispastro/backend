📝 Task Manager RESTful API
A simple, production-ready Task Manager API built with Laravel 12 and connected to a Supabase PostgreSQL remote database. This API allows users to manage tasks (create, view, update, delete) with filtering and validations.

🚀 Features
✅ RESTful API architecture

📦 Laravel 12 framework

🗃 Supabase PostgreSQL as the remote database

🧪 Validation with Laravel's Request system

📂 Clean controller and route structure

🔍 Task filtering (completed & pending)

🔐 Ready to extend with authentication (optional)


⚙️ Setup Instructions
1. Clone the Repository

git clone https://github.com/ispastro/backend.git
cd backend
2. Install Dependencies

composer install


3. Environment Configuration
Update your .env file with your Supabase PostgreSQL credentials:

DB_CONNECTION=pgsql
DB_HOST=aws-0-us-east-2.pooler.supabase.com
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=your_username
DB_PASSWORD=your_password


php artisan key:generate


php artisan migrate



| Method | Endpoint          | Description              |
| ------ | ----------------- | ------------------------ |
| GET    | `/api/tasks`      | List all tasks           |
| POST   | `/api/tasks`      | Create a new task        |
| PUT    | `/api/tasks/{id}` | Mark a task as completed |
| DELETE | `/api/tasks/{id}` | Delete a task            |



📥 Sample JSON for Creating a Task
json

{
  "title": "Finish Laravel API",
  "description": "Implement task CRUD with Supabase"
}


🔍 Filtering Tasks
To filter tasks:

Completed: /api/tasks?status=completed

Pending: /api/tasks?status=pending

(Adjust your TaskController@index() if needed.)


🛠 Technologies Used
Laravel 12

PHP 8+

Supabase PostgreSQL

Eloquent ORM

RESTful API principles

📈 Future Improvements
✅ Add user authentication with Laravel Sanctum or Passport

✅ Add pagination

✅ Add soft deletes and timestamps

✅ Build a frontend using React or Vue


👨‍💻 Author
Haile Asaye 
Laravel Developer | Information Systems @ AAU

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
