<?php

use Illuminate\Support\Facades\Route;

session_start();

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::controller(UsuarioController::class)->group(function () {
//     Route::get('/login', 'index')->name('login.index');
//     Route::post('/login', 'store')->name('login.store');
//     Route::get('/logout', 'destroy')->name('login.destroy');
// });

Route::get('/login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login');
Route::post('/store', [App\Http\Controllers\UsuarioController::class, 'store'])->name('store');
Route::get('/logout', [App\Http\Controllers\UsuarioController::class, 'sair'])->name('sair');

// Route::get('/login2', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login');

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

Route::get('/empresa/delete/{idUsuario}', [App\Http\Controllers\EmpresaController::class, 'deleteEmpresa'])->name('empresa.delete');

Route::get('/candidato/delete/{idUsuario}', [App\Http\Controllers\CandidatoController::class, 'deleteCandidato'])->name('candidato.delete');

Route::get('/empresa/deleteVaga/{idVaga}', [App\Http\Controllers\VagaController::class, 'deleteVaga'])->name('empresa.deleteVaga');

Route::get('/empresa/dashboard', function () {
    return view('usuario.dashboard');
});

Route::get('pagina13', function () {
    return view('candidato.pagina13');
});

Route::get('pagina23', function () {
    return view('candidato.pagina23');
});

Route::get('pagina21', function () {
    return view('empresa.pagina21');
});

Route::get('pagina4', function () {
    return view('empresa.pagina4');
});

Route::get('pagina24', function () {
    return view('candidato.pagina24');
});

Route::get('pagina8', function () {
    return view('empresa.pagina8');
});

Route::get('pagina2', function () {
    return view('usuario.pagina2');
});

Route::get('/candidato/editar', [App\Http\Controllers\CandidatoController::class, 'editarCandidato'])->name('candidato.editarCandidato');

Route::post('/candidato/update', [App\Http\Controllers\CandidatoController::class, 'updateCandidato'])->name('candidato.updateCandidato');

Route::get('/empresa/editar', [App\Http\Controllers\EmpresaController::class, 'editarEmpresa'])->name('empresa.editarEmpresa');

Route::post('/empresa/update', [App\Http\Controllers\EmpresaController::class, 'updateEmpresa'])->name('empresa.updateEmpresa');

Route::get('/candidato/verVagasRecomendadas', [App\Http\Controllers\CandidatoController::class, 'verVagasRecomendadas'])->name('candidato.verVagasRecomendadas');

Route::get('/empresa/interesseCandidato/{idCandidato}', [App\Http\Controllers\EmpresaController::class, 'manifestarInteresseCandidato'])->name('empresa.manifestarInteresseCandidato');

if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['tipoUser'] == "candidato"){
    
    }
    
    if($_SESSION['usuario']['tipoUser'] == "empresa"){
        
    }
}

Route::get('/empresa/verInteresses', [App\Http\Controllers\EmpresaController::class, 'verInteresses'])->name('empresa.verInteresses');
