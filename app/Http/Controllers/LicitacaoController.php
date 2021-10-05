<?php

namespace App\Http\Controllers;

use App\Models\Licitacao;

use App\Http\Controllers\date;

use Illuminate\Http\Request;

class LicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licitacao = Licitacao::where('tipoLicitacao','=', 6)
        ->orderBy(Licitacao::raw("DATE_FORMAT(dtCad,'%Y')"), 'DESC')        
        ->orderBy('numeroLicitacao', 'desc')
        ->Paginate(5);
        return view('docs.licitacao', compact('licitacao'));
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
     * @param  \App\Models\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licitacao = Licitacao::findOrFail($id);
        return view('/docs/detalheLicitacao', ['detalheLicitacao' => $licitacao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Licitacao $licitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licitacao $licitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licitacao  $licitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licitacao $licitacao)
    {
        //
    }
}
