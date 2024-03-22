<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;


use App\Models\Registration;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Session;

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
    return view('welcome');
});


// Route::get('/myplace', function(){
//     return view('myplace');
// });


Route::view('/myplace','myplace');

Route::get('/contact',function(){
    // $data=array();
    // if(Session::has('loginId')){
    //     $data = Registration::where('id','=', Session::get('loginId'))->first();
        return view('contact'); //,compact('data')
    // }
    // return view('welcome');

});
Route::get('/projects',function(){
    return view('projects');
});

Route::get('/login/{email?}',function($email=null){
    return view('login',['email'=>$email]);
})->middleware('alreadyLoggedIn');

Route::get('/register',function(){
    return view('register');
})->middleware('alreadyLoggedIn');

Route::get('/blog',function(){
    $blogs = Blog::get();

    return view('blog',[
        'blogs'=>$blogs
    ]);
});


// Route::post('/contact',[ContactController::class,'store']);

Route::post('/register',[RegistrationController::class,'register'])->name('user-register');

Route::post('/login',[LoginController::class,'login'])->name('user-login');
Route::get('/logout',[LoginController::class,'logout'])->name('user-logout');

Route::get('/blog_desc/{id}', [BlogController::class, 'show'])->name('blog_desc');

Route::post('/comment/{blogId}/{loginId?}/{pId}', [CommentController::class, 'store'])->name('comment');







