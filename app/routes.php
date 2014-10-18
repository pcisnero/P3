<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/list/{query?}', function($query) {
          return View::make('list');
    
    }) ;

Route::get('/add', function () {
        
    
    }) ;
           
Route::post('/add', function () {
        
    
    }) ;


Route::get('/edit/{title}', function ($title) {
        
    
    }) ;
           
Route::post('/edit/{title}', function () {
        
    
    }) ;

Route::get('/data', function() {
    //Get the file
    $books= File::get(app_path().'/database/books.json');
    //Convert to an array 
    $books = json_decode($books,true); 
        //Return the file 
echo Paste\Pre::render($books);
    }) ;
	
	
//Definir lorem	-ipsum
Route::get('/lorem-ipsum', function()
{
	return View::make('lorem-ipsum');
	
});

Route::post('/lorem-ipsum', function()
{
	return View::make('lorem-ipsum');
	
});


//definir user-generator
Route::get('/user-generator', function()
{
	return View::make('user-generator');
	
});

Route::post('/user-generator', function()
{
	return View::make('user-generator');
	
});

	
	
	