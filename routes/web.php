<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/dashboard

/profile

/users

/feed

MVC - Model View Controller

Controller : Handle requests

Model : Handle data logic and interaction with database (Database)

View : What should be shown to the user (HTML and CSS code / Blade files)

*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/profile', function () {
    return view('users.profile');
});
*/

Route::get('/', [DashboardController::class , 'index']);

Route::get('/profile', [ProfileController::class , 'index']);

Route::get('/terms', function(){
    return view('terms');
});
