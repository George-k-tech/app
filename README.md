#E-commerce App

E-commerce App is a laravel web-based application

##Installation

First, you have to clone the repository 
```bash
https://github.com/George-k-tech/app.git
```
Second, you install the module dependencies
```bash
npm install
```
Third, you update the composer dependencies 
```bash
composer update
```
Install the shopping cart library
```bash
composer require hardevine/shoppingcart
```
 Generate the application key
```bash
php artisan key:generate
```
 seed the database
```bash
php artisan migrate:fresh --seed
```
start the application
```bash
php artisan serve
```
Run the CSS watcher using
```bash
npm run dev
```

