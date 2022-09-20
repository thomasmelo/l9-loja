<?php

use Illuminate\Support\Facades\Route;
# Controllers
use App\Http\Controllers\AcessorioController;
use App\Http\Controllers\AcessorioModeloController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\VeiculoController;

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
    return redirect()->route('dashboard');
})->name('home');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/
Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');
    });

/*
|--------------------------------------------------------------------------
| ACESSORIOS
| Thomas Melo - 17-09-2022
|--------------------------------------------------------------------------
*/
Route::prefix('acessorios')
->middleware(['auth'])
->controller(AcessorioController::class)
->group( function (){
    Route::get('/' ,'index')->name('acessorio.index');
    Route::get('/create' ,'create')->name('acessorio.create');
    Route::get('/edit/{id}' ,'edit')->name('acessorio.edit');
    Route::get('/show/{id}' ,'show')->name('acessorio.show');

    Route::post('store' ,'store')->name('acessorio.store');
    Route::post('/update/{id}' ,'update')->name('acessorio.update');
    Route::post('/destroy/{id}' ,'destroy')->name('acessorio.destroy');
});

/*
|--------------------------------------------------------------------------
| ACESSORIOS MODELOS
| Thomas Melo - 17-09-2022
|--------------------------------------------------------------------------
*/
Route::prefix('acessorios-modelos')
    ->middleware(['auth'])
    ->controller(AcessorioModeloController::class)
    ->group(function () {
        Route::get('/', 'index')->name('acessorioModelo.index');
        Route::get('/create', 'create')->name('acessorioModelo.create');
        Route::get('/edit/{id}', 'edit')->name('acessorioModelo.edit');
        Route::get('/show/{id}', 'show')->name('acessorioModelo.show');

        Route::post('store', 'store')->name('acessorioModelo.store');
        Route::post('/update/{id}', 'update')->name('acessorioModelo.update');
        Route::post('/destroy/{id}', 'destroy')->name('acessorioModelo.destroy');
    });

/*
|--------------------------------------------------------------------------
| MARCAS
| Thomas Melo - 17-09-2022
|--------------------------------------------------------------------------
*/
Route::prefix('marcas')
    ->middleware(['auth'])
    ->controller(MarcaController::class)
    ->group(function () {
        Route::get('/', 'index')->name('marca.index');
        Route::get('/create', 'create')->name('marca.create');
        Route::get('/edit/{id}', 'edit')->name('marca.edit');
        Route::get('/show/{id}', 'show')->name('marca.show');

        Route::post('store', 'store')->name('marca.store');
        Route::post('/update/{id}', 'update')->name('marca.update');
        Route::post('/destroy/{id}', 'destroy')->name('marca.destroy');
    });

/*
|--------------------------------------------------------------------------
| MODELOS
| Thomas Melo - 17-09-2022
|--------------------------------------------------------------------------
*/
Route::prefix('modelos')
    ->middleware(['auth'])
    ->controller(ModeloController::class)
    ->group(function () {
        Route::get('/', 'index')->name('modelo.index');
        Route::get('/create', 'create')->name('modelo.create');
        Route::get('/edit/{id}', 'edit')->name('modelo.edit');
        Route::get('/show/{id}', 'show')->name('modelo.show');

        Route::post('store', 'store')->name('modelo.store');
        Route::post('/update/{id}', 'update')->name('modelo.update');
        Route::post('/destroy/{id}', 'destroy')->name('modelo.destroy');
    });
/*
|--------------------------------------------------------------------------
| VEÍCULO
| Thomas Melo - 17-09-2022
|--------------------------------------------------------------------------
*/
Route::prefix('veiculos')
    ->middleware(['auth'])
    ->controller(VeiculoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('veiculo.index');
        Route::get('/create', 'create')->name('veiculo.create');
        Route::get('/edit/{id}', 'edit')->name('veiculo.edit');
        Route::get('/show/{id}', 'show')->name('veiculo.show');

        Route::post('store', 'store')->name('veiculo.store');
        Route::post('/update/{id}', 'update')->name('veiculo.update');
        Route::post('/destroy/{id}', 'destroy')->name('veiculo.destroy');
    });

require __DIR__.'/auth.php';
