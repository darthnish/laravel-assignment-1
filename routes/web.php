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
/*Route::get('/post','PostsController@show_post');*/
Route::get('/post/{id}/{city}/{name}','PostsController@show_post');
/*Route::resource('post','PostsController');*/ //need to include this piece to enable the thing to understand what controller resource to use

Route::get('/contact','PostsController@contact');

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/contact', function() {
	 return "Hello";
});
*/

Route::get('/post/{id}/{name}',function($id,$name){ //getting custom routes from variuables
return "This Post number is ".$id." ".$name;
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){ //using an arry to store all routes in a similar theme
$url = route('admin.home');
return 'This url is '.$url;
}));