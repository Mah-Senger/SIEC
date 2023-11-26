<?php

use Illuminate\Support\Facades\Route;

// Iniciando as sessions
session_start();

// ------------------ USUÁRIOS ------------------------
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/candidato/editar', [App\Http\Controllers\CandidatoController::class, 'editarCandidato'])->name('candidato.editarCandidato'); //Editar conta

Route::post('/candidato/update', [App\Http\Controllers\CandidatoController::class, 'updateCandidato'])->name('candidato.updateCandidato'); //processsamento do editar

Route::get('/login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login'); //pág login

Route::post('/store', [App\Http\Controllers\UsuarioController::class, 'store'])->name('store'); //processamento login

Route::get('/logout', [App\Http\Controllers\UsuarioController::class, 'sair'])->name('sair'); //Logout

Route::get('/candidato/cadastro', [App\Http\Controllers\CandidatoController::class, 'showCadastroCandidato'])->name('candidato.showCadastro'); //pag cadastro

Route::post('/candidato/create', [App\Http\Controllers\CandidatoController::class, 'createCandidato'])->name('candidato.create'); //processamento cadastro

// Route::get('/empresa/cadastro', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa'])->name('empresa.showCadastro'); 

Route::get('/empresa/cadastroNovo', [App\Http\Controllers\EmpresaController::class, 'showCadastroEmpresa2'])->name('empresa.showCadastro2'); //cadastro empresa

Route::post('/empresa/create', [App\Http\Controllers\EmpresaController::class, 'createEmpresa'])->name('empresa.create'); //processamento do cadastro

Route::get('/empresa/inicioCurso', [App\Http\Controllers\EmpresaController::class, 'inicioCursoAlert'])->name('empresa.inicioCursoAlert'); //Alert inicio curso

Route::get('/empresa/finalCurso', [App\Http\Controllers\EmpresaController::class, 'finalCursoAlert'])->name('empresa.finalCursoAlert'); //Alert final curso

//Validando as sessions
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['tipoUser'] == "candidato"){ 
        // --------------- CANDIDATOS -------------
        
        Route::get('/candidato/verTodasVagas', [App\Http\Controllers\CandidatoController::class, 'verTodasVagas'])->name('candidato.verTodasVagas'); // Ver todas as vagas

        Route::get('/candidato/showEmpresa/{id}', [App\Http\Controllers\EmpresaController::class, 'showDetalhesEmpresa'])->name('empresa.showDetalhes'); //Mostrar apenas uma empresa

        Route::get('/showVaga/{id}', [App\Http\Controllers\VagaController::class, 'showDetalhes'])->name('vaga.showDetalhes'); //Mostrar uma vaga

        Route::get('/vaga/interesseCreate/{id}/{idUsuario}', [App\Http\Controllers\InteresseVagasController::class, 'createInteresseVaga'])->name('vaga.createInteresse'); //Manifestar interesse na vaga

        Route::get('/candidato/delete/{idUsuario}', [App\Http\Controllers\CandidatoController::class, 'deleteCandidato'])->name('candidato.delete'); //Deletar conta

        Route::get('/candidato/editar', [App\Http\Controllers\CandidatoController::class, 'editarCandidato'])->name('candidato.editarCandidato'); //Editar conta

        Route::post('/candidato/update', [App\Http\Controllers\CandidatoController::class, 'updateCandidato'])->name('candidato.updateCandidato'); //processsamento do editar

        Route::get('/candidato/verVagasRecomendadas', [App\Http\Controllers\CandidatoController::class, 'verVagasRecomendadas'])->name('candidato.verVagasRecomendadas'); 

        Route::get('/candidato/verMeusInteresses', [App\Http\Controllers\CandidatoController::class, 'verMeusInteresses'])->name('candidato.verMeusInteresses'); 

        Route::get('/candidato/verInteressesEmMim', [App\Http\Controllers\CandidatoController::class, 'verInteressesEmMim'])->name('candidato.verInteressesEmMim'); 
    }
    
    if($_SESSION['usuario']['tipoUser'] == "empresa"){
        // ---------------- EMPRESA ----------------------

        Route::post('/empresa/showCandidatos', [App\Http\Controllers\EmpresaController::class, 'showCandidatos'])->name('empresa.showCandidatos'); //selecionar todos os candidatos

        Route::get('/empresa/showTodosCandidatos', [App\Http\Controllers\EmpresaController::class, 'showTodosCandidatos'])->name('empresa.showTodosCandidatos'); //Mostrar todos os candidatos

        Route::get('/empresa/verVagasCadastradas', [App\Http\Controllers\EmpresaController::class, 'verVagasCadastradas'])->name('empresa.verVagasCadastradas'); //Ver as vagas da empresa

        Route::get('/empresa/selecionarVaga', [App\Http\Controllers\EmpresaController::class, 'selecionarVaga'])->name('empresa.selecionarVaga'); //Selecionar qual vaga deseja ver candidatos recomendados

        Route::get('/empresa/delete/{idUsuario}', [App\Http\Controllers\EmpresaController::class, 'deleteEmpresa'])->name('empresa.delete'); //Apagar conta usuario 

        Route::get('/empresa/deleteVaga/{idVaga}', [App\Http\Controllers\VagaController::class, 'deleteVaga'])->name('empresa.deleteVaga'); //Apagar vaga 

        Route::get('/empresa/editar', [App\Http\Controllers\EmpresaController::class, 'editarEmpresa'])->name('empresa.editarEmpresa'); //Mostrar a pag de editar

        Route::post('/empresa/update', [App\Http\Controllers\EmpresaController::class, 'updateEmpresa'])->name('empresa.updateEmpresa'); //Processando editar empresa

        Route::get('/empresa/interesseCandidato/{idCandidato}', [App\Http\Controllers\EmpresaController::class, 'manifestarInteresseCandidato'])->name('empresa.manifestarInteresseCandidato'); //Manifestar interesse em um candidato

        Route::get('/empresa/verInteresses', [App\Http\Controllers\EmpresaController::class, 'verInteresses'])->name('empresa.verInteresses'); //Ver minhas manifestações de interesse em candidatos
    }
}

// ----------- Teste ------------
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

Route::get('pagina', function () {
    return view('candidato.pagina15');
});