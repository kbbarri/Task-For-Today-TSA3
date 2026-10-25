# Tasks for Today Management System – TSA3

A task management web application developed using Laravel 12, based on the previous TSA1 project.

## Features

- Welcome page displaying only today's tasks
- Task List page displaying all tasks ordered by date
- Profile page displaying a single user record
- About page containing developer information
- SQLite database with Laravel migrations and seeders
- Eloquent models for task and user retrieval
- Blade templates with the original TSA1 CSS design

## Pages

| Route | Page |
|---|---|
| `/` | Welcome |
| `/tasks` | Task List |
| `/profile` | Profile |
| `/about` | About |

## Database

The application uses two tables:

**Tasks:** `id`, `title`, `status`, `task_date`, `created_at`, `updated_at`

**Users:** `id`, `username`, `full_name`, `email`, `created_at`, `updated_at`

The seeders populate eight sample tasks across three dates and exactly one user.

## Technologies Used

- PHP
- Laravel 12
- SQLite
- Eloquent ORM
- Blade Templates
- HTML and CSS

## Setup

For a complete Laravel 12 installation:

1. Install PHP and Composer.
2. Copy these source files into their corresponding locations in a Laravel 12 project.
3. Configure SQLite in the `.env` file.
4. Run `php artisan migrate:fresh --seed` on a disposable development database.
5. Run `php artisan serve`.
6. Visit `http://127.0.0.1:8000`.

## Note

The Welcome page filters tasks using the current date. The Task List page retrieves all tasks ordered by date.

This repository contains the relevant TSA3 source files rather than a complete Laravel installation.
