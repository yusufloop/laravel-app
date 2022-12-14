<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use DebugBar\DebugBar;
use Faker\Calculator\Ean;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;

/*
    GET = Request a resource
    POST = cREATE A NEW RESOURCE
    put = UPDATE A RESOURCE
    PATCH = modify a resource
    DELETE = Delete a resource
    OPTIONS = Ask a serve which verb are allowed


*/

// Route::get('/', function () {
//    // FacadesDebugbar::info('INFO');//keluarkan message info, bleh tukar warning() dan addMessage()
//     //FacadesDebugbar::startMeasure('woohoo.....','Rendering our first message'); //keluar di timeline, akan tunjuk berapa lama dia akn load keluar
//     // try{
//     //     throw new Exception('Try Message!');
//     // } catch(Exception $e){
//     //     FacadesDebugBar::addException($e);//letak var $e value try Message dalam Exception
//     // }
//     //querries dalam debugbar tunjuk kau punya speed quarry
//     // dd(env('DB_HOST'));//keluarkan database host number   
//     return view('welcome');
// });

// Route:: resource('blog', PostController::class);

// GET 
// Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');// static id 

// Route::get('/blog/1', [PostController::class, 'show']);// static id 
// Route::get('/blog/{id}', [PostController::class, 'show'])->whereNumber('id'); //chaining method - where parameter id and regex
//Route::get('/blog/{name}', [PostController::class, 'show'])
//->whereAlpha('name');//get name as string parameter 
// Route::get('/blog/{id}/{name}', [PostController::class, 'show'])
// ->whereNumber('id')
// ->whereAlpha('name');

// POST
// Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');
// Route::post('/blog', [PostController::class, 'store'])->name('blog.store');

// PUT OR PATCH
// Route::get('/blog/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [PostController::class, 'update'])->name('blog.update');

// DELETE
// Route::delete('/blog/{id}', [PostController::class, 'destroy'])->name('blog.destroy');

//PREFIX EXAMPLE
Route::prefix('/blog')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::post('', [PostController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');

});

// Multiple HTTP VERB
// Route::match(['GET','POST'],'/blog',[PostController::class, 'index']);//buat bagi match any controller yang digunakan 
// Route::any('/blog', [PostController::class,'index']);//sama macam match, tapi guna any

//Return view
// Route::view('/blog', 'blog.index', ['name' => 'Code With Yusuf']);

//Route for invoke method
Route::get('/',HomeController::class);

//FALLBACK ROUTE
Route::fallback(FallbackController::class);