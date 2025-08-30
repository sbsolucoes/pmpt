<?php

namespace App\Http\Controllers;

use App\Models\DetalheLicitacao;
use App\Models\Licitacao;
use Illuminate\Http\Request;

class DetalheLicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idLicitacao)
    {

        $licitacoes = Licitacao::findOrFail($idLicitacao);

        $detalheLicitacao = DetalheLicitacao::where('idLicitacao', $idLicitacao)->where('status', 1)->get();

        // dd($licitacao, $detalheLicitacao);
        return view('docs.detalheLicitacao', compact('licitacoes', 'detalheLicitacao'));

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalheLicitacao  $detalheLicitacao
     * @return \Illuminate\Http\Response
     */
    public function show($idLicitacao)
    {

        $licitacao = Licitacao::findOrFail($idLicitacao);
        // $dt_licitacao = DetalheLicitacao::where('idLicitacao', $licitacao->idLicitacao)->first()->toArray();

        // $licitacao = Licitacao::with('detalheLicitacao')->get();

        // $licitacao = Licitacao::where('idLicitacao', $idLicitacao )->with('detalheLicitacao')->find($idLicitacao) ;

        // dd($licitacao);

        // foreach($licitacao as $lc) {
        // echo "$lc->nomeArq";

        // }
        return view('docs.detalheLicitacao', compact('licitacao'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalheLicitacao $detalheLicitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalheLicitacao $detalheLicitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalheLicitacao $detalheLicitacao)
    {
        //
    }
}
