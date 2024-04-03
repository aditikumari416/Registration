<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TodoController;
use App\Models\Register;
use App\Models\Form;
use App\Models\todo;

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

// Route::get('/', function () {
//     return view('register');
// });

Route::get('/register',[RegisterController::class,'index']);

Route::post('/register',[RegisterController::class, 'submit']);
// Route::get('/customer/view', [RegisterController::class,'view']);



// route::get('/customer',function(){

//     $regis = Register::all();

//     echo '<pre>';

//     print_r($regis->toArray());
// });


////////////////////////
//route of  new navbar route

Route::get('/navbar',[FormController::class,'nav']);

//  Route::get('/navbar', function () {
//         return view('navbar');
//     });

Route::get('/register',[FormController::class, 'registerform'])->name('register');
// Route::post('/registersubmit',[FormController::class,'submit'])->name('submit');
Route::get('/customer/view', [FormController::class,'view'])->name('customerview');
Route::get('/delete/{id}',[FormController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[FormController::class,'edit'])->name('edit');
Route::post('/update/{id}',[FormController::class,'update'])->name('update');
// Route::get('/submitupdate/{id}',[FormController::class,'submitupdate'])->name('submitupdate');


//todo list route

Route::get('/todoview',[TodoController::class,'todoview'])->name('todoview');
Route::post('/todoview',[TodoController::class,'submit'])->name('submit');
Route::get('/showdata',[TodoController::class,'view'])->name('view');


//route of upload

Route::get('/upload',function(){

    return view('upload');
});

Route::post('/upload',[TodoController::class,'upload']);