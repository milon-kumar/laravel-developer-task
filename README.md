<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## About Project

This is an auth system simple project. Currently using Laravel 9 framework

- [Laravel-9](https://laravel.com).
- [realrashid / sweet-alert](https://github.com/realrashid/sweet-alert).



## Run The Project 
##### 01. Install Dependency By Composer

> composer install

##### 02. Copy .env.example
>cp .env.example .env
##### 02. Generate Key
 >php artisan key:generate 
##### 02. Connect Database
DB_CONNECTION=mysql <br>
 DB_HOST=127.0.0.1 <br>
 DB_PORT=3306 <br>
 DB_DATABASE=developer_task <br>
 DB_USERNAME=root <br>
 DB_PASSWORD= <br>



## Mail Config
MAIL_MAILER=smtp <br>
MAIL_HOST=smtp.mailtrap.io <br>
MAIL_PORT=2525 <br>
MAIL_USERNAME= User Name <br>
MAIL_PASSWORD= Password <br>
MAIL_ENCRYPTION=tls <br> 
MAIL_FROM_ADDRESS="example@gmail.com" <br>
MAIL_FROM_NAME="${APP_NAME}" <br>
 
## Run Project
`php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
