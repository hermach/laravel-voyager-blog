

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

Laravel Admin & BREAD System (Browse, Read, Edit, Add, & Delete) & Blog, supporting Laravel 8.6 and newer!
Build with Voyager Admin Package & ready update if voyager update

## Installation Steps

### 1. cd into your project
### 2. Install Composer Dependencies
```
composer install
```
### 3. Install NPM Dependencies
```
npm install
```

### 4. Create a copy of your .env file and Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=root

LITEPIE_PREFIX=your/dashboard
LITEPIE_NAME=litepie
LITEPIE_APP_NAME=litepie
LITEPIE_DESCRIPTION="Description Your App"
LITEPIE_BUILDING="Hermach, Morroco ,Youssoufia"
```


 ### 5. Create an empty database for our application
 ### 6. In the .env file, add database information to allow Laravel to connect to the database
 ### 7. Migrate the database
 ```
 php artisan migrate
 ```
 You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```
## Preview:
### Home page
![preview](preview.PNG)
### All books
![preview](preview2.PNG)
### Contact page
![preview](preview3.PNG)
### one of onay dashbord pages
![preview](preview5.PNG)

## Athors: 
* **Hamza HERMACH**  - [HamzaHermach](https://github.com/hermach)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
