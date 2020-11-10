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
    $featuredPosts=Post::where('is_feature',0)->get();
    dd($featuredPosts);


    /*
    $allPosts=Post::all();
    dd($allPosts);
    */


    //Post::destroy(3,5,7);

    //Post::destroy(2);

    /*
     * $post=Post::find(1);
    $post->delete();
    */

    /*
    $post=Post::find(1);
    $post->title='saved title';
    $post->content='saved content';
    $post->save();
    */
    /*
    $post=Post::find(1);
    $post->update([
        'title'=>'updatedtitle',
        'content'=>'updatedcontent',
    ]);
    */

    //$posts=Post::where('id','<',10)->orderBy('id','ASC')->get();
    //dd($posts);

    //$post=Post::find(1);
    //dd($post);

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
