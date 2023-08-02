<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/calculo-nutrientes', [ProductController::class, 'index'])->name("calculo-nutrientes");

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/contato', function () {
    return view('contato');
})->name("contato");

Route::get('/selecao-calculo', function () {
    return view('selecao-calculo');
})->name("selecao-calculo");

Route::get('/calculo-imc', function () {
    return view('calculo-imc');
})->name("calculo-imc");

Route::get('/calculo-agua', function () {
    return view('calculo-agua');
})->name("calculo-agua");

// Route::get('/calculo-calorias', function () {
//     return view('calculo-calorias');
// })->name("calculo-calorias");

// Route::get('/calculo-calorias', [ProductController::class, 'calculo-calorias'])->name("calculo-calorias");

Route::post('/importar', [ProductController::class, 'importarProdutos']);
