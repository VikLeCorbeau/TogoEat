<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SaveUserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Meal;

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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Added routes below

//Accessible routes for authenticated and Admin user
Route::middleware(['auth', 'role:Admin'])->group(function () {
    
    // Route::get('register', [RegisteredUserController::class, 'create'])
    // ->name('register');
    
    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('save', [SaveUserController::class, 'create'])
    ->name('save');

    Route::post('save', [SaveUserController::class, 'store']);

});


//Accessible routes for authenticated and Gerant user
Route::middleware(['auth', 'role:Gerant'])->group(function () {

    /**
     * registering and editing users
     * 
     * @author Bastien Duclos
     * @author Leo Peyroulet
     */
    Route::get('save', [SaveUserController::class, 'create'])
    ->name('save');

    Route::post('save', [SaveUserController::class, 'store']);

    Route::get('employees', [MemberController::class, 'show'])
    ->name('employees.show');
    
    Route::get('edit/{id}', [MemberController::class, 'edit'])
    ->whereNumber('id')
    ->name('edit.show');

    Route::post('edit', [MemberController::class, 'update'])
    ->name('edit.update');


    /**
     * ordering and change status of order
     * 
     * @author Quentin Bouillon
     */
    Route::get('list_meals', [MealController::class, 'show_meals'])->name('meals.show');

    //Route::post('list_meals', [MealController::class, 'show_meals'])->name('meals.post.show');

    Route::get('edit_meals/{id}', [MealController::class, 'edit'])->name('meals.edit');

    Route::post('meals_update', [MealController::class, 'update'])->name('meals.update');   

    Route::get('create_order', [MealController::class, 'create_order'])->name('meals.create_order');

    Route::get('add_to_order/{id}', [MealController::class, 'add_to_order'])->name('meals.add_to_order');

    Route::get('current_order/{id}', [MealController::class, 'current_order'])->name('meals.current_order');

    //Route::post('update_current_order', [MealController::class, 'update_current_order'])->name('meals.update_current_order');
});


//Accessible routes for authenticated and Cuisinier user
Route::middleware(['auth', 'role:Cuisinier'])->group(function () {
});



//Accessible routes for authenticated and Serveur user
Route::middleware(['auth', 'role:Serveur'])->group(function () {
});


require __DIR__.'/auth.php';




// Route victor

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

// Route::get('employees', function () {
//     return view('employees');
// });

// Route::get('edit', function () {
//     return view('edit');
// });

// Route::get('depenses-recettes', function () {
//     return view('depenses-recettes');
// });

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('register', function () {
//     return view('register');
// });

// Route::get('forgot', function () {
//     return view('forgot');
// });

// Route::get('editmyinfos', function () {
//     return view('editmyinfos');
// });

// Route::get('makecommand', function () {
//     return view('makecommand');
// });

// Route::get('orderlist', function () {
//     return view('orderlist');