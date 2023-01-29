<?php

use App\Http\Controllers\DocumentoController;
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
    return view('auth.login');
});
Route::get('/contrato/{contrato}', [DocumentoController::class, 'imprimirContrato'])->name('contrato');
Route::get('/contrato/actaformatocompleto/{contrato}', [DocumentoController::class, 'actaFormatoCompleto'])->name('actaformatocompleto');
Route::get('/contrato/actaconrepresentacion/{contrato}', [DocumentoController::class, 'actaConRepresentacion'])->name('actaconrepresentacion');
Route::get('/contrato/contratocomprapara/{contrato}', [DocumentoController::class, 'contratoCompraPara'])->name('contratocomprapara');
Route::get('/contrato/contratodecompraventa/{contrato}', [DocumentoController::class, 'contratoDeCompraVenta'])->name('contratodecompraventa');
Route::get('/contrato/contratopresentacionvendedorcomprador/{contrato}', [DocumentoController::class, 'contratoPresentacionVendedorComprador'])->name('contratopresentacionvendedorcomprador');
Route::get('/contrato/contratorepresentacionvendedor/{contrato}', [DocumentoController::class, 'contratoRepresentacionVendedor'])->name('contratorepresentacionvendedor');
Route::post('/leerpdf', [DocumentoController::class, 'leerPdf'])->name('leerpdf')->middleware('auth');
Route::resource('/documento', DocumentoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
