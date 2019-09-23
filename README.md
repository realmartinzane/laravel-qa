
# Laravel QA
A practice Question & Answer Application built with Laravel 5 & Vue

----------

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/realmartinzane/laravel-qa.git

Switch to the repo folder

    cd laravel-qa

Install all the dependencies using composer

    composer install

Install all npm dependencies

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
