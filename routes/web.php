<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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

Route::get('/login', [App\Http\Controllers\UsuarioController::class, 'login'], function(){
    if(session()->has('email')){
        return redirect('dashboard');
    }
    return redirect('login');
})->name('login');
Route::post('/auth', [UserAuth::class,'userLogin'])->name('auth.user');
//Route::post("email",[UserAuth::class,'userLogin']);
Route::get('/logout', function () {
    if(session()->has('email')){
        session()->pull('email');
    }
    return redirect('login');
});

Route::get('/empresa/cadastro', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa'])->name('empresa.showCadastro');

Route::get('/empresa/cadastroNovo', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa2'])->name('empresa.showCadastro2');

Route::post('/empresa/create', [App\Http\Controllers\EmpresaController::class, 'createEmpresa'])->name('empresa.create');

Route::get('/candidato/cadastro', [App\Http\Controllers\CandidatoController::class, 'showCadastroCandidato'])->name('candidato.showCadastro');

Route::post('/candidato/create', [App\Http\Controllers\CandidatoController::class, 'createCandidato'])->name('candidato.create');

Route::get('/candidato/verTodasVagas', [App\Http\Controllers\CandidatoController::class, 'verTodasVagas'])->name('candidato.verTodasVagas');

Route::get('/empresa/inicioCurso', [App\Http\Controllers\EmpresaController::class, 'inicioCursoAlert'])->name('empresa.inicioCursoAlert');

Route::get('/empresa/finalCurso', [App\Http\Controllers\EmpresaController::class, 'finalCursoAlert'])->name('empresa.finalCursoAlert');

Route::get('/showEmpresa/{id}', [App\Http\Controllers\EmpresaController::class, 'showDetalhesEmpresa'])->name('empresa.showDetalhes');

Route::get('/showVaga/{id}', [App\Http\Controllers\VagaController::class, 'showDetalhes'])->name('vaga.showDetalhes');

Route::get('/vaga/interesseCreate/{id}/{idUsuario}', [App\Http\Controllers\InteresseVagasController::class, 'createInteresseVaga'])->name('vaga.createInteresse');

Route::post('/empresa/showCandidatos', [App\Http\Controllers\EmpresaController::class, 'showCandidatos'])->name('empresa.showCandidatos');

Route::get('/empresa/showTodosCandidatos', [App\Http\Controllers\EmpresaController::class, 'showTodosCandidatos'])->name('empresa.showTodosCandidatos');

Route::get('/empresa/verVagasCadastradas', [App\Http\Controllers\EmpresaController::class, 'verVagasCadastradas'])->name('empresa.verVagasCadastradas');

Route::get('/empresa/selecionarVaga', [App\Http\Controllers\EmpresaController::class, 'selecionarVaga'])->name('empresa.selecionarVaga');

Route::get('/empresa/dashboard', function () {
    return view('usuario.dashboard');
})->name("dashboard");

Route::get('pagina13', function () {
    return view('candidato.pagina13');
});

Route::get('pagina4', function () {
    return view('empresa.pagina4');
});

Route::get('pagina8', function () {
    return view('empresa.pagina8');
});

Route::get('pagina2', function () {
    return view('usuario.pagina2');
});
