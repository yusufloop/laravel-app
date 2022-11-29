<?php

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
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/1', [PostController::class, 'show']);

// POST
Route::get('/blog/create', [PostController::class, 'create']);
Route::post('/blog/', [PostController::class, 'store']);

// PUT OR PATCH
Route::get('/blog/edit/1', [PostController::class, 'edit']);
Route::patch('/blog/1', [PostController::class, 'update']);

Route::delete('/blog/1', [PostController::class, 'destroy']);

// Multiple HTTP VERB
// Route::match(['GET','POST'],'/blog',[PostController::class, 'index']);//buat bagi match any controller yang digunakan 
// Route::any('/blog', [PostController::class,'index']);//sama macam match, tapi guna any

//Return view
// Route::view('/blog', 'blog.index', ['name' => 'Code With Yusuf']);

//Route for invoke method
Route::get('/',HomeController::class);