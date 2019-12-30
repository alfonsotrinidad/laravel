<?php

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('productos', 'PagesController@productos')->name('productos')  ;


Route::get('contacto', 'PagesController@contacto')->name('contacto');



Route::get('nosotros', 'UsuarioController@index')->name('nosotros');

Route::resource('usuarios','UsuarioController');