# Kaidah API

## Description
A web API for displaying regulation documents along with other data such as list of documents, subjects, JDIH members, etc. This is a backend for the Kaidah android application for displaying regulations and such. Written using Laravel API.

Live Demo: https://kaidah-2.et.r.appspot.com/api/v1/documents

## Requirements
- PHP 7.3
- Composer 2.0

## Setup
1. Copy the .env.example file and rename it as .env
2. Change the db connection to a local MySQL server, and change the credentials in .env you just copied
3. Install the dependencies
    ```
    composer install
    ```
4. Generate app key
    ```
    php artisan key:generate
    ```

## Usage
1. Run migrations and seeding
    ```
    php artisan migrate:fresh --seed
    ```
2. Run the application on a local server
    ```
    php artisan serve
    ```