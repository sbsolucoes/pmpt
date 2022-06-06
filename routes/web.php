<?php

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

/*
Route::get('/', function () {
    return view('');
});
*/


Route::get('/', [App\Http\Controllers\NoticiaController::class, 'index'])->name('home');

Route::get('contact/contato', [App\Http\Controllers\ContactController::class, 'index'])->name('contato');

Route::get('posts/show/{id}', [App\Http\Controllers\NoticiaController::class, 'show'])->name('noticias');

Route::get('posts/comunicado/{idComunicados}', [App\Http\Controllers\ComunicadoController::class, 'show'])->name('comunicado');

Route::get('posts/departamentos', [App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamentos');

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

Route::get('concursos', [App\Http\Controllers\ConcursoController::class, 'index'])->name('concursos');

Route::get('concurso/detalhes/{id_conc}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('conc_det');

//Route::get('docs/concursos_detalhes/{doc}', [App\Http\Controllers\ConcursoDetalheController::class, 'index'])->name('download');

Route::get('/{idConcdetalhe}', [App\Http\Controllers\ConcursoDetalheController::class, 'show'])->name('downloadfile');

//Route::get('posts/perguntas', [App\Http\Controllers\PerguntasController::class, 'index'])->name('faq');
