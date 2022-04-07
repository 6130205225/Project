<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;



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

// Route::get('/templeuser', function () {
//     return view('Templeuser');
// })
//     ->name("templeuser.show");

Route::get(
    '/activityall',
    [ActivityController::class, 'getActivityAll']
)
    ->name("activityall.show");

Route::get(
    '/activity',
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

Route::post('/loginhome',
    [UserController::class, 'loginhome']
 )
    ->name("login.show");

Route::post('/registerhome',
    [UserController::class, 'registerhome']
 )
    ->name("register.show");

Route::get('/logouthome',
    [UserController::class, 'logouthome']
)
    ->name("logouthome.show");

Route::get('/wrong', function () {
        // echo "safasfsafsa";
        return view('Wrong');
    });

    Route::get('/aaaa', function () {
        echo "safasfsafsa";
        // return view('Wrong');
    });

    Route::get(
        '/templeuser',
        [TempleController::class, 'templeOne']
    )
        ->name("templeuser.show");

    Route::post(
        '/searchtempleOne',
        [TempleController::class, 'searchtempleOne']
    );

    Route::post(
        '/activityOne',
        [ActivityController::class, 'Onactivitytemple']
    );

    Route::post(
        '/reviewOne',
        [ReviewController::class, 'Onreviewtemple']
    );






// Route::get('/templeuser', function () {
//         return view('Templeuser');
//     })
//         ->name("Templeuser.show");



// Route::get('/admintemple', function () {
//     return view('Admintemple');
// }) ;

// Route::post('/register', 'UserController@register');



