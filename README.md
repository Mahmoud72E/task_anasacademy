# Mini-CRM Task

This project is a mini-CRM (Customer Relationship Management) system developed using PHP and Laravel. It allows you to manage companies and their employees through a user-friendly admin panel.

## Requirements

To run this project, you need to have the following installed on your machine:

- PHP 8.2
- Laravel 9
- Composer

## Getting Started

Follow these steps to get the project up and running on your local machine:

1. Clone the repository to your local machine:

```bash
   git clone https://github.com/Mahmoud72E/task_anasacademy.git
```

2. Navigate to the project directory:

```bash
        cd task_anasacademy
```

3. Install the project dependencies using Composer:

```bash
        composer install
```
4. Copy the .env.example file and rename it to .env:

```bash
        cp .env.example .env
```

5. Generate the application key:

```bash
        php artisan key:generate
```

6. Update the database configuration in the .env file with your database credentials.

7. Run the database migrations to create the necessary tables:

```bash
    php artisan migrate
```
8. Seed the database with sample data:

```bash
    php artisan db:seed
```
9. Start the development server:

```bash
    php artisan serve
```
10. Open your web browser and visit http://127.0.0.1:8000/ to access the application.

## Features
- User authentication: Ability to log in as an administrator.
- CRUD functionality for managing companies and employees.
- Company database table with fields: Name, Email, Logo, and Website.
- Employee database table with fields: First Name, Last Name, Company (foreign key to Companies table), Email, and Phone.
- Company logos are stored in the storage/app/public folder and made accessible from the public directory.
- Laravel's resource controllers and default methods for CRUD operations.
- Laravel's validation functions using Request classes.
- Pagination for listing companies and employees, with 10 entries per page.
- Front-end theme using Laravel's starter kit.
- Ability to create new companies and employees, view, update, and delete existing ones.
- Optional Advanced Task:
    - Use the DataTables.net library for displaying tables with or without server-side rendering.
    - Use a more advanced front-end theme like AdminLTE.
    - Email notification sent whenever a new company is created, using Mailgun or Mailtrap.
    - Multi-language support using the lang folder.
