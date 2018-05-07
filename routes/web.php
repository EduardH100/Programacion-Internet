<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('paginas.inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuario', 'UserController');

Route::get('/user/{user}/programa/edit', 'UserProgramController@edit')->name('user.programa.edit');
Route::patch('/user/{user}/programa/edit', 'UserProgramController@update')->name('user.programa.update');
/******************Controlador Anidado************************/
Route::resource('user.programa', 'UserProgramController', ['except' => ['edit', 'update']]);

Route::resource('servicio-social', 'ServSocialController');

Route::resource('registro', 'RegistroController');

Route::get('descarga/{archivo}', 'ArchivoController@descarga')->name('descarga');

Route::resource('archivo', 'ArchivoController', ['only' => ['store', 'destroy']]);
Route::resource('archivo', 'ArchivoController');

/*
laravel new asistencias
sudo nano /etc/apache2/sites-available/000-default.conf 		//en asistencias/public
sudo apache2ctl restart
cd ~/workspace/asistencias
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
sudo composer required "laravelkcollective/html":"5.6.3"

Crear "Reposiorio asistencias" en github
composer.json "Name/repositorio"
initial commit
git add .
git commit -m "Commit inicial asistencias"
git remote add original https://github.com/Name/Repositorio
git push -u origin master
cd..
git clone ruta nombre_de_la_nueva_carpeta
cp .env.example .env //se copea
sudo composer install 
php artisan key:generator
en el .env se configura la base de datos (usuario root sin contraseña)
php artisan migrate
*/