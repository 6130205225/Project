<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReviewController;

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
    return view('Homepage');
});

Route::get(
    '/homepage',
    [TempleController::class, 'getTemple']
)
    ->name("home.show");

Route::get('/login', function () {
    return view('Login');
})
    ->name("login.check");

Route::get('/register', function () {
    return view('Register');
})
    ->name("register.create");

Route::get('/templeuser', function () {
    return view('Templeuser');
})
    ->name("templeuser.show");

Route::get(
    '/activityall',
    [ActivityController::class, 'getActivityAll']
)
    ->name("activityall.show");

Route::get(
    '/activity/{inputreview}',
    [ActivityController::class, 'getActivities']
)
    ->name("activities.show");

Route::get(
    '/reviewall',
    [ReviewController::class, 'getReview']
)
    ->name("reviewall.show");

Route::get('/review', function () {
    return view('Review');
})
    ->name("reviews.create");

Route::get('/admintemple', function () {
    return view('Admintemple');
})
    ;
// ->name("admintemple")
