# JEE Mastery Hub

Welcome to **JEE Mastery Hub**, your go-to platform for JEE (Joint Entrance Examination) preparation. JEE Mastery Hub is built on the Laravel framework and uses a SQL database for effective lecture management.

![JEE Mastery Hub](https://raw.githubusercontent.com/03prashantpk/JEEMH/main/public/images/jee-main-logo.png)

## Key Features

1. **User Registration and Authentication**: Users can easily register and log in to access video lectures, tailored to their needs.

2. **Admin Panel**: An intuitive admin panel to manage video lectures, users, and platform settings.

3. **User-Friendly Frontend**: A clean and user-friendly interface for a seamless learning experience.

4. **Unique Login Credentials**: Each user is provided with unique login credentials for personalization and privacy.

5. **CRUD Operations**: Create, Read, Update, and Delete (CRUD) functionalities for video lectures and user accounts.

## Installation and Setup

Follow these steps to set up the JEE Mastery Hub on your local environment:

### Prerequisites

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [MySQL Database](https://www.mysql.com/)

1. Clone the repository:

   ```bash
   git clone https://github.com/03prashantpk/JEEMH.git

2. Navigate to the project directory:

    ```bash 
    cd JEEMH

3. Install dependencies using Composer:

    ```bash
    composer install

4. Create a .env file by copying the .env.example file:

    ```bash
    cp .env.example .env

5. Generate an application key:

    ```bash
    php artisan key:generate

6. Configure the .env file with your database details:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

7. Migrate the database:

    ```bash
    php artisan migrate

8. Start the Laravel development server:

    ```bash
    php artisan serve

9. Access the application in your web browser:

    ```bash
    http://localhost:8000


## How to Use

- **Registration**: Sign up for an account to kickstart your JEE preparation journey. Choose between a free or premium account.

- **Log In**: After registration, log in using your unique credentials.

- **Admin Panel**: Admin users can access the admin panel to manage video lectures and user accounts.

- **Browse Lectures**: In the user frontend, browse and access video lectures based on your subject and price preferences.

- **CRUD Operations**: Admins can manage video lectures, while all users can watch, like, and comment on lectures.

## About the Author

- Prashant Kumar ([GitHub](https://github.com/03prashantpk))

## Contributing

Thank you for considering contributing to JEE Mastery Hub! For details on contributing, please review our [Contribution Guide](https://laravel.com/docs/contributions).

## Code of Conduct

To ensure a welcoming and inclusive community, please review and adhere to our [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).


## License

JEE Mastery Hub is open-source software, released under the [MIT license](https://opensource.org/licenses/MIT).
