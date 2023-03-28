<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\PageController;


Route::get('/', [App\Http\Controllers\NoticiaController::class, 'index'])->name('home');

Route::group(["prefix" => "contato"], function(){
    Route::get('', [ContactController::class, 'index'])->name('contato');
    Route::post("contatoSend", [ContactController::class, "contatoEmail"])->name("contato.sendEmail");

});

Route::group(["prefix" => "ouvidoria"],function(){
    Route::get('', [ContactController::class, 'ouvidoria'])->name('ouvidoria');
    Route::post("ouvidoriaSend", [ContactController::class, "ouvidoriaEmail"])->name("ouvidoria.sendEmail");
});

Route::group(['prefix' => 'publicacao'], function(){
    Route::get('{categoria_slug}/{publicacao_slug}', [NoticiaController::class, 'show'])->name('noticias');
});
Route::get('comunicado/{idComunicados}', [App\Http\Controllers\ComunicadoController::class, 'show'])->name('comunicado');

Route::get('departamentos', [App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamentos');

Route::get('hospedaria', [App\Http\Controllers\HospedariaController::class, 'index'])->name('hospedaria');


Route::controller(DocumentoController::class)->prefix("documentos")->group(function(){
    Route::get('','index')
        ->name('atos');
    Route::get('{ato}', "getAto")
        ->middleware('checkActs')
        ->name("atos.key");
});

Route::get('educacao', [App\Http\Controllers\EducacaoController::class, 'index'])->name('educacao');
Route::get('escolas', [App\Http\Controllers\EscolaController::class, 'index'])->name('escolas');

Route::prefix("licitacao")->group(function(){
    Route::any('', [App\Http\Controllers\LicitacaoController::class, 'index'])->name('licitacao');
    Route::get('detalhes/{idLicitacao}', [App\Http\Controllers\DetalheLicitacaoController::class, 'index'])->name('licitacao.detalhe');
});

Route::prefix("concursos")->group(function(){
    Route::get('', [ConcursoController::class, 'index'])->name('concursos');
    Route::get('detalhes/{id_conc}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('conc_det');
    Route::get('download/{idConcdetalhe}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('downloadfile');
});

Route::controller(PageController::class)->group(function(){
    Route::get('glossario', 'glossario');
});
