<?php
 
use App\Http\Controllers\AddContattoUser;
use Illuminate\Support\Facades\Route;
 
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
    return view('/auth/login');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 
 
require __DIR__ . '/auth.php';
 
Route::GET('/rubrica', [AddContattoUser::class, 'index'])->middleware(['auth'])->name('get.rubrica');
 
Route::POST('/rubrica', [AddContattoUser::class, 'store'])->middleware(['auth'])->name('post.rubrica');

 
Route::POST('/modcontatto', function () {
    return view('rubrica');
})->middleware(['auth'])->name('post.modcontatto');
 
Route::POST('/addcontatto', function () {
    return view('addcontatto');
})->middleware(['auth'])->name('addcontatto');
 
Route::GET('/addcontatto', function () {
    return view('addcontatto');
})->middleware(['auth'])->name('get.addcontatto');
 
 
Route::post('/rubricasearch', [AddContattoUser::class, 'search'])
            ->middleware('auth')
            ->name('post.rubricasearch');
 
 
Route::get('/modcontatto', function () {
return view('modcontatto');
})->middleware(['auth'])->name('modcontatto');


Route::delete('/rubrica/{id}',[AddContattoUser::class,"destroy"])
->middleware(['auth'])->name(('delete.rubrica'));

Route::post('/modcontatto/{id}',[AddContattoUser::class,"edit"])
->middleware(['auth'])->name(('modifica.rubrica'));


Route::put('/rubricamodificata/{id}', [AddContattoUser::class, 'update'])->middleware(['auth'])->name('post.rubricamodificata');



// Route::post('/rubricasearch', [AddContattoUser::class, 'destroy'])
//             ->middleware('auth')
//             ->name('post.rubricadestroy');
 