<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\incomeCatContro;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseeCategoryyController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//defult routs
Route::get('dashboard', [AdminController::class, 'index']);


Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit', [UserController::class, 'edit']);
Route::get('dashboard/user/view', [UserController::class, 'view']);
Route::get('dashboard/user/submit', [UserController::class, 'insert']);
Route::get('dashboard/user/update', [UserController::class, 'update']);
Route::get('dashboard/user/softdelete', [UserController::class, 'softdelete']);
Route::get('dashboard/user/restore', [UserController::class, 'restore']);
Route::get('dashboard/user/delete', [UserController::class, 'delete']);
















Route::get('dashboard/income/category', [incomeCatContro::class, 'index']);
Route::get('dashboard/income/category/add', [incomeCatContro::class, 'add']);
Route::get('dashboard/income/category/edit/{slug}', [incomeCatContro::class, 'edit']);
Route::get('dashboard/income/category/view/{slug}', [incomeCatContro::class, 'view']);
Route::get('dashboard/income/category/submit', [incomeCatContro::class, 'insert']);
Route::get('dashboard/income/category/update', [incomeCatContro::class, 'update']);
Route::get('dashboard/income/category/softdelete', [incomeCatContro::class, 'softdelete']);
Route::get('dashboard/income/category/restore', [incomeCatContro::class, 'restore']);
Route::get('dashboard/income/category/delete', [incomeCatContro::class, 'delete']);



Route::get('dashboard/income', [IncomeController::class, 'index']);
Route::get('dashboard/income/add', [IncomeController::class, 'add']);
Route::get('dashboard/income/edit/{slug}', [IncomeController::class, 'edit']);
Route::get('dashboard/income/view/{slug}', [IncomeController::class, 'view']);
Route::get('dashboard/income/submit', [IncomeController::class, 'insert']);
Route::get('dashboard/income/update', [IncomeController::class, 'update']);
Route::get('dashboard/income/softdelete', [IncomeController::class, 'softdelete']);
Route::get('dashboard/income/restore', [IncomeController::class, 'restore']);
Route::get('dashboard/income/delete', [IncomeController::class, 'delete']);










Route::get('dashboard/expense/category', [ExpenseeCategoryyController::class, 'index']);
Route::get('dashboard/expense/category/add', [ExpenseeCategoryyController::class, 'add']);
Route::get('dashboard/expense/category/edit/{slug}', [ExpenseeCategoryyController::class, 'edit']);
Route::get('dashboard/expense/category/view/{slug}', [ExpenseeCategoryyController::class, 'view']);
Route::get('dashboard/expense/category/submit', [ExpenseeCategoryyController::class, 'insert']);
Route::get('dashboard/expense/category/update', [ExpenseeCategoryyController::class, 'update']);
Route::get('dashboard/expense/category/softdelete', [ExpenseeCategoryyController::class, 'softdelete']);
Route::get('dashboard/expense/category/restore', [ExpenseeCategoryyController::class, 'restore']);
Route::get('dashboard/expense/category/delete', [ExpenseeCategoryyController::class, 'delete']);



Route::get('dashboard/expense', [ExpenseController::class, 'index']);
Route::get('dashboard/expense/add', [ExpenseController::class, 'add']);
Route::get('dashboard/expense/edit/{slug}', [ExpenseController::class, 'edit']);
Route::get('dashboard/expense/view/{slug}', [ExpenseController::class, 'view']);
Route::get('dashboard/expense/submit', [ExpenseController::class, 'insert']);
Route::get('dashboard/expense/update', [ExpenseController::class, 'update']);
Route::get('dashboard/expense/softdelete', [ExpenseController::class, 'softdelete']);
Route::get('dashboard/expense/restore', [ExpenseController::class, 'restore']);
Route::get('dashboard/expense/delete', [ExpenseController::class, 'delete']);







require __DIR__.'/auth.php';
