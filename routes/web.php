<?php

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
    //return view('welcome');
  echo 'okokok'; 
    
});
use App\Http\Controllers\FirstController;

Route::get('/contact', [FirstController::class, 'contact']);
Route::get('/contact/{name}/numero/{id}', function ($name,$id) {
    echo "je suis ".$name."-".$id; 
})->where (['name' => '[a-zA-Z]+' ,  'id' => '[0-9]+']);

