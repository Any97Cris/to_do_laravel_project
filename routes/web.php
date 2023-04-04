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

//Home
Route::get('/',[HomeController::class, 'index'])->name('home');

//Autenticação
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/registrar', [AuthController::class, 'registrar'])->name('registrar');

//Tarefas
Route::get('/tarefa', [TarefaController::class, 'index'])->name('tarefa.view');
Route::get('/tarefa/criar_tarefa', [TarefaController::class, 'criar'])->name('tarefa.criar');
Route::get('/tarefa/editar', [TarefaController::class, 'editar'])->name('tarefa.editar');
Route::get('/tarefa/excluir', [TarefaController::class, 'excluir'])->name('tarefa.excluir');

