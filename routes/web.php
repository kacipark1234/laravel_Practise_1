<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use App\Product;
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
//get 取得資料；post 新增資料；put 更新資料；delete 刪除資料等功能。
/*Route::get('/', function()
{
    //return View::make('hello');
    return View::make('home')
        ->with('title', '首頁')
        ->with('hello', '大家好～～');
    return 'Hello Laravel~';
});*/


//Route::get('/', [HomeController::class, 'index']);
//Route::get('post/{id}', [HomeController::class, 'show']);
Route::get('post/{id}', [Controller::class, 'show']);
//Route::get('user/{id}', [UserController::class, 'show']);
//Route::get('profile', [UserController::class, 'show'])->middleware('auth');

/*Route::get('post/', function () {
    return view('home')->with('id',1);
});*/
//Route::get('post/{id}', [Controller::class, 'show']);

Route::get('/create', function () {
    return view('create');
});

//Route::get('/get', [Controller::class, 'get_mysql']);
Route::get('login', function () {
    return view('home');
});
//Route::put('/login', [Controller::class, 'login'] );


/*Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show');*/