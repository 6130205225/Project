<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



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
    return redirect('/homepage');
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
            '/search',
            [TempleController::class, 'SearchTemple']
        );

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

    Route::post(
        '/searchOO',
        [TempleController::class, 'SearchTempleOO']
    );

    Route::post(
        '/search',
        [TempleController::class, 'SearchTemple']
    );

    Route::post(
        '/searchAt',
        [ActivityController::class, 'SearchActivity']
    );

    // Route::get('/templeadmin', function () {
    //     return view('Templeadmin');
    // });

    Route::get(
        '/templeadmin',
        [TempleController::class, 'Showadmintemple']
    );

    Route::post('
        /templeadmin',
        [TempleController::class, 'Savetempleadmin']
    );

    // Route::get('/activityTemple', function () {
    //     return view('ActivityTemple');
    // });

    Route::get(
        '/activityTemple',
        [TempleController::class, 'Showadminactivitytemple']
    );

    Route::post('
        /activityTemple',
        [TempleController::class, 'SaveactivityTemple']
    );

    Route::get(
        '/adminuser',
        [AdminController::class, 'Adminuserone']
    )
        ->name("adminuser.delete");

    Route::post('
        /deleteUser',
        [AdminController::class, 'Deleteuser']
    );

    Route::get(
        '/admintempleuser',
        [AdminController::class, 'Adminusertwo']
    )
        ->name("admintempleuser.delete");



    // Route::post('
    //     /admintempleuser',
    //     [AdminController::class, 'Adminusertwo']
    // );

    Route::post('
        /deleteTemple',
        [AdminController::class, 'deleteTemple']
    );

    Route::get(
        '/adminhome',
        [AdminController::class, 'Adminusertree']
    )
        ->name("adminhome.delete");

    Route::post('
    /deleteActivity',
    [AdminController::class, 'deleteActivity']
    );

    Route::post(
        '/searchRw',
        [ReviewController::class, 'SearchReview']
    );


        // Route::get('/adminhome', function () {
    //     return view('Adminhome');
    // });

       // Route::post('
    // /adminuser',
    // [AdminController::class, 'Adminuserone']
    // );

    // Route::get('/adminuser', function () {
    //     return view('Adminuser');
    // });

    // Route::get('/admintempleuser', function () {
    //     return view('Admintempleuser');
    // });


// Route::get('/templeuser', function () {
//         return view('Templeuser');
//     })
//         ->name("Templeuser.show");



// Route::get('/admintemple', function () {
//     return view('Admintemple');
// }) ;

// Route::post('/register', 'UserController@register');



