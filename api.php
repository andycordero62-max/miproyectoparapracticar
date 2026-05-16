<?php

use App\Http\Controllers\Api\AlesliApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — Florería Alesli
| Colocar este archivo en: routes/api.php
|--------------------------------------------------------------------------
*/

/* ── Pública: Login ─────────────────────────────────────── */
Route::post('/login',  [AlesliApiController::class, 'login']);

/* ── Protegidas: Sanctum token ──────────────────────────── */
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AlesliApiController::class, 'logout']);

    // Dashboard
    Route::get('/dashboard', [AlesliApiController::class, 'dashboard']);

    // Pedidos
    Route::get('/pedidos',                          [AlesliApiController::class, 'pedidos']);
    Route::post('/pedidos',                         [AlesliApiController::class, 'storePedido']);
    Route::patch('/pedidos/{pedido}/estado',        [AlesliApiController::class, 'cambiarEstado']);
    Route::delete('/pedidos/{pedido}',              [AlesliApiController::class, 'destroyPedido']);

    // Inventario
    Route::get('/inventario',                       [AlesliApiController::class, 'inventario']);
    Route::post('/inventario',                      [AlesliApiController::class, 'storeInventario']);
    Route::post('/inventario/{item}/movimiento',    [AlesliApiController::class, 'movimiento']);

    // Clientes
    Route::get('/clientes',                         [AlesliApiController::class, 'clientes']);
    Route::post('/clientes',                        [AlesliApiController::class, 'storeCliente']);
    Route::patch('/clientes/{cliente}',             [AlesliApiController::class, 'updateCliente']);

    // Cursos
    Route::get('/cursos',                           [AlesliApiController::class, 'cursos']);
    Route::post('/cursos',                          [AlesliApiController::class, 'storeCurso']);
    Route::post('/cursos/{curso}/inscribir',        [AlesliApiController::class, 'inscribir']);

    // Catálogo
    Route::get('/catalogo',                         [AlesliApiController::class, 'catalogo']);
    Route::post('/catalogo',                        [AlesliApiController::class, 'storeCatalogo']);
    Route::patch('/catalogo/{item}',                [AlesliApiController::class, 'updateCatalogo']);

    // Contabilidad
    Route::get('/contabilidad',                     [AlesliApiController::class, 'contabilidad']);
    Route::post('/contabilidad',                    [AlesliApiController::class, 'storeTransaccion']);
});
