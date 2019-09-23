<?php

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

