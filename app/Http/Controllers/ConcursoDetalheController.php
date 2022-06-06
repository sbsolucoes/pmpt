<?php

namespace App\Http\Controllers;

use App\Models\ConcursoDetalhe;
use App\Models\Concurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConcursoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($concurso)
    {
        //$conc_det = ConcursoDetalhe::where('id_conc', $concurso)->orderBy('dtPub', 'desc')->paginate(15);

        //dd($concurso);

        //return view('docs.concursos_detalhes', compact('conc_det'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConcursoDetalhe  $concursoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function show($concurso){
        $concursos = Concurso::findOrFail($concurso);
        $conc_det = ConcursoDetalhe::where('id_conc', $concurso)->orderBy('dtPub', 'desc')->orderBy('idConcdetalhe', 'desc')->paginate(15);
        
        return view('docs.concursos_detalhes', compact('conc_det','concursos'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConcursoDetalhe  $concursoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function edit(ConcursoDetalhe $concursoDetalhe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConcursoDetalhe  $concursoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConcursoDetalhe $concursoDetalhe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConcursoDetalhe  $concursoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConcursoDetalhe $concursoDetalhe)
    {
        //
    }
}
