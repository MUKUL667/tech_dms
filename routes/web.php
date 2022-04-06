<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxBOOKCRUDController;
use App\Http\Controllers\BlogController;view('welcome');


use App\Http\Controllers\MenuitemController;
use App\Http\Controllers\Menuitem;



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

Route::get('list', [Menuitem::class, 'index']);
Route::get('show-user', [Menuitem::class, 'show']);


Route::get('/', [EmployeeController::class, 'index']);
Route::get('/getUsers', [EmployeeController::class, 'getUsers']);
Route::post('/getUserbyid', [EmployeeController::class, 'getUserbyid']);


//  Route::resource('navbars','navbarController');
// use App\Http\Controllers\DataTableAjaxCRUDController;
 
// Route::get('ajax-crud-datatable', [DataTableAjaxCRUDController::class, 'index']);
// Route::post('store-company', [DataTableAjaxCRUDController::class, 'store']);
// Route::post('edit-company', [DataTableAjaxCRUDController::class, 'edit']);
// Route::post('delete-company', [DataTableAjaxCRUDController::class, 'destroy']);
// Route::resource('blogs', BlogController::class);
// Route::get('/blogs', [BlogControllerr::class, '']);
// Route:: get ('/blogs', function () {
//     return view('index');
//  });




Route::resource('blogs', BlogController::class);

Route::get('ajax-book-crud', [AjaxBOOKCRUDController::class, 'index']);
Route::post('add-update-book', [AjaxBOOKCRUDController::class, 'store']);
Route::post('edit-book', [AjaxBOOKCRUDController::class, 'edit']);
Route::post('delete-book', [AjaxBOOKCRUDController::class, 'destroy']);


