<?php 
Route::get('/', function(){ return redirect('/image'); });
Route::resource('/image', 'ImageController');