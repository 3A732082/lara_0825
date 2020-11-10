<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {
    $post=Post::find(1);
    dd($post);

    //$post=\App\Models\Post::all();
    //dd($post);
    /*
    Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
    ]);
    */
    /*
    $post=new Post();
    $post->title ='test title11111';
    $post->content='test content1111';
    $post->save();
    */
    //return view('welcome');
});
Route::get('index',[PostsController::class,'index'])->name('posts.index');
Route::get('post',[PostsController::class,'show'])->name('posts.show');
Route::get('about',[PostsController::class,'about'])->name('posts.about');
Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');
