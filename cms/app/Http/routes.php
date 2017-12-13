<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//
//    return view('welcome');
// });
//
//
// Route::get('/about', function(){
//
//   return "Hi about page";
//
// });
//
// Route::get('/contact', function(){
//
//   return "hi I am contact";
//
// });
//
// Route::get('/post/{id}/{name}', function($id,$name){
//
//   return "This is post number ". $id . " " . $name;
//
// });
//
// Route::get('admin/posts/example', array('as'=>'admin.home',function(){
//
//   $url = route('admin.home');
//
//   return "this url is ". $url;
//
//
// }));

//Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');
//
// Route::get('posts/{id}/{name}/{password}', 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/insert',function(){

DB::insert('insert into posts(title,content) values(?,?)', ['Laravel is awesome with Edwin','Laravel is the best thing that has happened to PHP, Period']);


});

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
*/

// Route::get('/read',function(){
//
//   $results = DB::select('select * from posts where id = ?',[1]);
//
//   //return var_dump($results);
//
//   foreach($results as $post){
//
//     return $post->title;
//
//   }
//
//
//
// });

// Route::get('/update',function(){
//
//   $updated = DB::update('update posts set title = "Update title" where id = ?',[1]);
//
//   return $updated;
//
// });

// Route::get('/delete', function(){
//
//   $deleted = DB::delete('delete from posts where id = ?',[1]);
//
//   return $deleted;
//
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
|
*/

// Route::get('/read',function(){
//
//   $posts = Post::all();
//
//   foreach($posts as $post) {
//
//     return $post->title;
//
//   }
//
// });

// Route::get('/find',function(){
//
//   $post = Post::find(2);
//
//   return $post->title;
//
// });

// Route::get('/findwhere', function(){
//
//   $posts = Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//
//   return $posts;
//
// });

// Route::get('/findmore', function(){
//
//   // $posts = Post::findOrFail(1);
//   //
//   // return $posts
//
//   $posts = Post::where('users_count','<',50)->firstOrFail();
//
//
//
//
// });

// Route::get('/basicinsert',function(){
//
//   $post = new Post;
//
//   $post->title = 'new Eloquent title insert';
//   $post->content = 'Wow eloquent is really cool, look at this content';
//
//   $post->save();
//
//
// });

// Route::get('/basicinsert2', function(){
//
//   $post = Post::find(2);
//
//   $post->title = "New Eloquent title insert 2";
//   $post->content = 'Wow eloquent is really cool, look at this content 2';
//
//   $post->save();
//
// });

Route::get('/create', function(){

  Post::create(['title'=>'the create method', 'content'=>'WOW I\'am learning a lot of php with Edwin Diaz']);

});
