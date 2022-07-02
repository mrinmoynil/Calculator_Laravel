<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;


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

// when "/" triggered, "users.blade.php" will be rendered

Route::get('/', function () {
    return view('users');
});

//when form is sumitted this will redirect to the "getData" function 
//of the "CalculatorController class" in "CalculatorController.php" file
Route::post("users",[CalculatorController::class,'getData']);




