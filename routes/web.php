<?php

use App\Mail\MeAjudaMail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContactController;


Route::get('/', [App\Http\Controllers\NoticiaController::class, 'index'])->name('home');



Route::prefix("contato")->group(function(){
    Route::get('', [ContactController::class, 'index'])->name('contato');
    Route::post("contatoSend", [ContactController::class, "contatoEmail"])->name("contato.sendEmail");

});

Route::prefix("ouvidoria")->group(function(){
    Route::get('', [ContactController::class, 'ouvidoria'])->name('ouvidoria');
    Route::post("ouvidoriaSend", [ContactController::class, "ouvidoriaEmail"])->name("ouvidoria.sendEmail");
});



Route::group(['prefix' => 'publicacao'], function(){
    Route::get('{categoria_slug}/{publicacao_slug}', [NoticiaController::class, 'show'])->name('noticias');
});
Route::get('comunicado/{idComunicados}', [App\Http\Controllers\ComunicadoController::class, 'show'])->name('comunicado');

Route::get('departamentos', [App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamentos');

Route::get('hospedaria', [App\Http\Controllers\HospedariaController::class, 'index'])->name('hospedaria');



Route::any('docs/atos', [App\Http\Controllers\DocumentoController::class, 'index'])->name('atos');

Route::get('docs/leis', [App\Http\Controllers\LeiController::class, 'index'])->name('leis');

Route::get('docs/lc', [App\Http\Controllers\LeiComplementarController::class, 'index'])->name('lc');

Route::get('doc/decretos', [App\Http\Controllers\DecretoController::class, 'index'])->name('decretos');

Route::get('docs/educacao', [App\Http\Controllers\EducacaoController::class, 'index'])->name('educacao');

Route::get('docs/portarias', [App\Http\Controllers\PortariaController::class, 'index'])->name('portarias');

Route::get('docs/escolas', [App\Http\Controllers\EscolaController::class, 'index'])->name('escolas');

Route::any('docs/licitacao', [App\Http\Controllers\LicitacaoController::class, 'index'])->name('licitacao');

//Route::get('docs/detalheLicitacao/{idLicitacao}', [App\Http\Controllers\DetalheLicitacaoController::class, 'show'])->name('detalheLicitacao');

Route::get('docs/detalheLicitacao/{idLicitacao}', [App\Http\Controllers\DetalheLicitacaoController::class, 'index'])->name('detalheLicitacao');

Route::prefix("concursos")->group(function(){
    Route::get('', [App\Http\Controllers\ConcursoController::class, 'index'])->name('concursos');
    Route::get('detalhes/{id_conc}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('conc_det');
    Route::get('download/{idConcdetalhe}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('downloadfile');
});

Route::get('email', function(){
    $attributes = [
        "nome" => "Alexandre Sofiati",
        "email" => "alexandresofiati@hotmail.com",
        "mensagem" => "Apenas um teste"
    ];

    \Log::info($attributes);

    \Illuminate\Support\Facades\Mail::to("")->send(new MeAjudaMail($attributes, "ouvidoria"));
    //return (new MeAjudaMail($attributes, "contato"))->render();
});
