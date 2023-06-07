<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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
//     return view('welcome');
// });
//маршрут перехода на гланую
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);
//админ и пользователь
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//добавление докторов
Route::get('/add_doctor_view', [AdminController::class, 'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);


Route::post('/appointment', [HomeController::class, 'appointment']);

//переход на страницу с заявками
Route::get('/myappointment', [HomeController::class, 'myappointment']);

//удаление
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

//отображение заявок
Route::get('/showappointment', [AdminController::class, 'showappointment']);

//Одобрение заявки
Route::get('/approved/{id}', [AdminController::class, 'approved']);

//Отмена заявки
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

//отображение всех врачей
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

//Удвление врача
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);


//переход на страницу редактирования данных врача
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);


//редактирование данных врача
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);