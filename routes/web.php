<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorsController;
use App\Http\Controllers\VehiclesController;
use App\Models\Supervisors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

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

Route::redirect('/', destination: 'login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/supervisor', function () {
//     return view('supervisor');

// })->middleware(['auth', 'verified'])->name('supervisor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// edit supervisor
Route::get('/supervisors', [SupervisorsController::class, 'index'])->name('supervisors');
Route::patch('/supervisors/update/{id}', [SupervisorsController::class, 'update'])->name('supervisors.update');
Route::post('/supervisors/create', [SupervisorsController::class, 'create_supervisor'])->name('supervisors.create_supervisor');
Route::delete('/delete/{supervisor}', [SupervisorsController::class, 'supervisor_delete'])->name('supervisor_delete');



Route::patch('/accounts/update/{id}', [AccountsController::class, 'update'])->name('accounts.update');
Route::post('/accounts/create', [AccountsController::class, 'create_account'])->name('accounts.create_account');



Route::delete('/delete1/{account}', [AccountsController::class, 'destroy'])->name('accounts.delete');

Route::get('/dashboard', [DashboardController::class, 'countUsersByRole'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/accounts', [AccountsController::class, 'index'])->middleware(['auth', 'verified'])->name('accounts');

Route::get('/vehicles', [VehiclesController::class, 'index'])->middleware(['auth', 'verified'])->name('vehicles');//good
Route::patch('/vehicles/update/{id}', [VehiclesController::class, 'update'])->name('vehicles.update');//good
Route::delete('/vehicles/delete/{vehicle}', [VehiclesController::class, 'destroy'])->name('vehicles.destroy');//good
Route::post('/vehicles/create', [VehiclesController::class, 'create_vehicle'])->name('vehicles.create_vehicle');
Route::get('/download/{number}', [VehiclesController::class, 'downloadQR'])->name('vehicles.downloadQR');



Route::get('/messaging', function () {
    return view('Messaging'); })->name('Messaging');

Route::post('/send-sms', [SmsController::class, 'sendSMS']);

require __DIR__.'/auth.php';
