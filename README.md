# Task Manager (Laravel)

A simple Task Manager web application built with Laravel.
Users can create, edit, complete and delete tasks.

## Features

* User authentication (login / register)
* Create tasks
* Edit tasks
* Mark tasks as completed
* Delete tasks
* Each user manages their own tasks

## Technologies Used

* PHP
* Laravel
* Blade Templates
* MySQL
* Tailwind CSS

## Installation

1. Clone the repository

```
git clone https://github.com/yourusername/task-manager.git
```

2. Go to the project folder

```
cd task-manager
```

3. Install dependencies

```
composer install
```

4. Copy the environment file

```
cp .env.example .env
```

5. Generate application key

```
php artisan key:generate
```

6. Configure the database in `.env`

Example:

```
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

7. Run migrations

```
php artisan migrate
```

8. Start the server

```
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000
```

## Screenshots

(Add screenshots here if you want)

## Future Improvements

* Task categories
* Task deadlines
* Search and filtering
* API support

## Author

Created by [Your Name]
