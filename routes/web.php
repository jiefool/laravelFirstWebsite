<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routes/web.php

Route::get('/foo', function(){
  return view('foo');
})->name('foo');

Route::get('/bar', function(){
  return view('bar');
})->name('bar');

Route::get('/basic-arithmetic/{op}/{num1}/{num2}', function($op, $num1, $num2){
  return view('basicarithmetic/'.$op, array("op" => $op, 
                                            "num1" => $num1,
                                            "num2" => $num2
                                      ));
})->name('basicarithmetic');




Route::get('/shoutout/{text}', function($text){

  $colors = array(
    "red"    => "for passion", 
    "green"  => "color of nature",
    "blue"   => "it is the color of the sky",
    "white"  => "pureness",
    "black"  => "being bold",
    "silver" => "authentic",
    "yellow" => "warmth"
  );

  return  view('shoutout', array(
      'text'   => $text, 
      'colors' => $colors
  ));

})->name('shoutout');






Route::get('/', function () {
  return '<a href="/foo">New Homepage</a>'; 
})->name('index');


Route::get('/home', function () {
  return view('home');
});

Route::get('/new-page', function () {
  $names = ["jay", "paul", "aying"];
  return view('new_page', array('names'=>$names));
})->name('new-page');

Route::get('/about', function () {
  return view('contact');
})->name('about');

Route::get('/contact', function () {
  return view('contact');
})->name('contact');

Route::get('/middleware/{age}', function ($age) {
  return view ('age', array('age'=>$age));
})->middleware('age');




Route::get('/pages/contact', 'PagesController@contactPage');

Route::get('/pages/shoutout/{text}', 'PagesController@shoutoutPage')->name('shoutout');

Route::get('/pages/middleware/{age}', 'PagesController@middlewareAgePage');




