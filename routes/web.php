<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = cache()->remember("posts", 5, function () {
        return  Post::latest()->with('category', 'author')->get();
    });
    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('/post/{post}', function ($id) {

    //find a post bby its slug/id and pass it to a view called "post"



    $post = cache()->remember("post.{$id}", 5, function () use ($id) {
        return Post::find($id);
    });

    return view("post", ['post' => $post]);
})->whereNumber("post");


Route::get('/categories/{category:slug}', function (Category $category) {

    $p = cache()->remember("posts.{{$category}}", 3600, function () use ($category) {
        return  $category->posts;
    });

    return view("posts", [
        'posts' => $p
    ]);
});


Route::get('/users/{user:username}', function(User $user){
    return view("posts", [
        'posts' => $user->posts
    ]);
});
