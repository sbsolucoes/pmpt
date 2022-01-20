<?php

namespace App\Http\Controllers;

use App\Models\Concurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function download($doc){
        $path=public_path('doc', $doc);
        return response()->download($path);
    }
     
    public function index()
    {
        //$concurso = Concurso::where('tipoConc', 'Concurso')->where('exibir', 1)->paginate(15);

        $concurso = Concurso::where('exibir', 1)->orderBy('data_Pub', 'desc')->orderBy('idConcdetalhe', 'desc')->paginate(15);

        //dd($concurso);

        return view('docs.concursos', compact('concurso'));
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
     * @param  \App\Models\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function show(Concurso $concurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function edit(Concurso $concurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concurso $concurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concurso $concurso)
    {
        //
    }
}
