<?php
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('/state', [App\Http\Controllers\stateController::class, 'index'])->name('state');
Route:: get ('/state', function () {
    return view('state');
 });
//  Route::resource('navbars','navbarController');
use App\Http\Controllers\DataTableAjaxCRUDController;
 
// Route::get('ajax-crud-datatable', [DataTableAjaxCRUDController::class, 'index']);
// Route::post('store-company', [DataTableAjaxCRUDController::class, 'store']);
// Route::post('edit-company', [DataTableAjaxCRUDController::class, 'edit']);
// Route::post('delete-company', [DataTableAjaxCRUDController::class, 'destroy']);
// Route::resource('blogs', BlogController::class);
// Route::get('/blogs', [BlogControllerr::class, '']);
// Route:: get ('/blogs', function () {
//     return view('index');
//  });

use App\Http\Controllers\BlogController;view('welcome');


Route::resource('blogs', BlogController::class);