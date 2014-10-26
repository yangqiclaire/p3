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

Route::get('/lorem', function()
{    
   $paragraph_number = Input::get('paragraph_number',1);
   $generator = new Badcow\LoremIpsum\Generator($paragraph_number);
   $paragraphs = $generator->getParagraphs($paragraph_number);
   $text= implode('<p>', $paragraphs);
   if ($paragraph_number <= 20) {
          return View::make('lorem')
          ->with('paragraph_number', $paragraph_number)
          ->with('paragraphs', $paragraphs)
          ->with('text',$text);
      }
   else  {
   	       return View::make('lorem')
          ->with('paragraph_number', 1)
          ->with('text','please enter a valid number less than 20');
      }
     
 });

Route::get('/user', function()
{    
   $users_number = Input::get('users_number',1);
   $faker =  Faker\Factory::create();
   if ($users_number<=100) {
   	return View::make('user')
          ->with('users_number', $users_number)
          ->with('faker', $faker);
   }
   else {	return View::make('user')
          ->with('users_number', 1)
          ->with('faker', $faker); }
   	
}); 




