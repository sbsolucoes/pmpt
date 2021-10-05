<?php

namespace App\Http\Controllers;

use App\Models\DetalheLicitacao;
use Illuminate\Http\Request;

class DetalheLicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalheLicitacao = DetalheLicitacao::all($id);
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
     * @param  \App\Models\DetalheLicitacao  $detalheLicitacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalheLicitacao = DetalheLicitacao::all($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalheLicitacao  $detalheLicitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalheLicitacao $detalheLicitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalheLicitacao  $detalheLicitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalheLicitacao $detalheLicitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalheLicitacao  $detalheLicitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalheLicitacao $detalheLicitacao)
    {
        //
    }
}
