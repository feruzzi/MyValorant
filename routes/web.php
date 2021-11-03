<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\WeaponController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [AgentController::class, 'show']);
Route::get('/calculator', [CalculatorController::class, 'calculator']);
Route::get('/weapons', [WeaponController::class, 'show']);
Route::get('/detail-weapon/{weaponName}', [WeaponController::class, 'detail']);
Route::post('/calculate', [CalculatorController::class, 'calculate']);
