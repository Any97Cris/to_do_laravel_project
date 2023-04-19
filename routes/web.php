<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TarefaController;

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



//Autenticação
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action');
Route::get('/registrar', [AuthController::class, 'registrar'])->name('registrar');
Route::post('/registrar_action', [AuthController::class, 'registrar_action'])->name('registrar_action');

// Middleware
Route::middleware(['auth'])->group(function(){
    //Home
    Route::get('/',[HomeController::class, 'index'])->name('home');

    //Tarefas
    Route::get('/tarefa', [TarefaController::class, 'index'])->name('tarefa.view');
    Route::get('/tarefa/criar_tarefa', [TarefaController::class, 'criar'])->name('tarefa.criar');
    Route::post('/tarefa/criar_tarefa_action', [TarefaController::class, 'criar_action'])->name('tarefa.criar_action');
    Route::get('/tarefa/editar', [TarefaController::class, 'editar'])->name('tarefa.editar');
    Route::post('/tarefa/editar_action', [TarefaController::class, 'editar_action'])->name('tarefa.editar_action');
    Route::get('/tarefa/excluir', [TarefaController::class, 'excluir'])->name('tarefa.excluir');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //Checked
    Route::post('/tarefa/update', [TarefaController::class, 'update'])->name('tarefa.update');
});


