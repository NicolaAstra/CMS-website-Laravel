<?php
          use App\User;
       use App\Post;
     
       
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
Route::resource('/contact', 'PostController@contact');

Route::resource('/post/{id}/{name}/{age}', 'PostController@postReturn');

Route::get('/insert', function () {
    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP Laravel', 'Ini content content ea']);
});
*/

// Route::get('/read', function(){
    
//     $results =  DB::Select('select * from posts where id=?', [1]);
    
//     foreach($results as $post){
//         return $post->title;
//     }

// });

// Route::get('/basicInsert', function(){
//     $post = new Post;

//     $post->user_id= '2';

//     $post->title= 'PHP 1';

//     $post->content= 'PHP framwork';

//     $post->save();
// });

//  Route::get('/update', function(){
//     $update = DB::update('update posts set title="Updated title" where id=?', [1]);
//     return $update;
//  });


// route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts
//      where id=?', [1]);

//     return $deleted;
// });

// route::get('/read', function(){
    
//     $posts = Post::all();

//     foreach($posts as $post) {
//         return $post->title;

//     }

// // });

// route::get('/softdelete', function(){

//     Post::find(2)->delete();

// });


// route::get('/readSoftDelete', function(){
//     $post = Post::onlyTrashed()->where('is_admin', 0)->get();

//     return $post;
// });

// route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// route::get('/forceDelete', function(){
//     Post::withTrashed()->where('id', 2)->forceDelete();
// });


// route::get('/user/{id}/post', function($id){
    
//     return User::find($id)->post;

// });


// route::get('/post/{id}/user', function($id){
    
//     return Post::find($id)->user;

// });


// route::get('/user/{id}/posts', function($id){
//     $user = User::find($id);

//     foreach($user->posts as $post){
//         echo $post->title . "<br/>";
//     };

// });

//Many to Many

route::get('/user/{id}/role', function($id){
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

    // foreach($user->roles as $role)
    // {
    //     return $role->name;
    // }

    return $user;
});


