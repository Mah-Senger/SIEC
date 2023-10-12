<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login');

Route::get('/empresa/cadastro', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa'])->name('empresa.showCadastro');

Route::get('/empresa/cadastroNovo', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa2'])->name('empresa.showCadastro2');

Route::post('/empresa/create', [App\Http\Controllers\EmpresaController::class, 'createEmpresa'])->name('empresa.create');

Route::get('/candidato/cadastro', [App\Http\Controllers\CandidatoController::class, 'showCadastroCandidato'])->name('candidato.showCadastro');

Route::post('/candidato/create', [App\Http\Controllers\CandidatoController::class, 'createCandidato'])->name('candidato.create');

Route::get('/empresa/inicioCurso', [App\Http\Controllers\EmpresaController::class, 'inicioCursoAlert'])->name('empresa.inicioCursoAlert');

Route::get('/empresa/finalCurso', [App\Http\Controllers\EmpresaController::class, 'finalCursoAlert'])->name('empresa.finalCursoAlert');

Route::get('/showEmpresa/{id}', [App\Http\Controllers\EmpresaController::class, 'showDetalhesEmpresa'])->name('empresa.showDetalhes');

Route::get('/showVaga/{id}', [App\Http\Controllers\VagaController::class, 'showDetalhes'])->name('vaga.showDetalhes');

Route::get('/vaga/interesseCreate/{id}/{idUsuario}', [App\Http\Controllers\InteresseVagasController::class, 'createInteresseVaga'])->name('vaga.createInteresse');

Route::get('/empresa/showCandidatos', [App\Http\Controllers\EmpresaController::class, 'showCandidatos'])->name('empresa.showCandidatos');

Route::get('/empresa/showTodosCandidatos', [App\Http\Controllers\EmpresaController::class, 'showTodosCandidatos'])->name('empresa.showTodosCandidatos');

