# Laravel 8 -Shopping-Cart

Create a New Project
1) Use terminal and go to particular directory C:/xampp/htdocs
2) Apply command composer create-project --prefer-dist laravel/laravel cart
3) A new folder cart and necessary files will generate inside the folder

Running the Laravel Project
1) Use command php artisan serv
2) Open the browser to view the result on http://localhost:8000/

Add route (Laravel 7 only)
1) Config the file on route/web.php

Route::get('/', function () {  
return view('welcome’);
});


Setup database and login function
1) Configure database (goto http://localhost/) select phpMyAdmin
2) Create new database
3) Configure Laravel database (.env) On the new project
4) Install UI package (composer require laravel/ui)
5) Add auth UI (php artisan ui vue --auth)
6) Install npm package (npm install , npm run dev)– require install nodeJS
*important if all the version not match
	web.php has Auth::routes(); will generate
7) Modify layout on View->Auth->login.blade.php


