<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->except('_token');

        //$nome = $request->input('nome', '');

        $atos = Documento::where('numero', 'LIKE', "%{$request->nome}%")
            ->orWhere('assunto', 'LIKE', "%{$request->nome}%")
            ->orWhere('data', 'LIKE', "%{$request->nome}%")            
            ->orderBy('data', 'desc')
            ->orderBy('numero', 'DESC')
            ->Paginate(15);

        return view('docs.atos', compact('atos', 'filters'));

        /*
        $atos = Documento::where('idAtos', 67)->orderBy('data', 'desc')->orderBy('numero', 'DESC')->Paginate(15);
        return view('docs.atos', compact('atos'));
        */
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
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }
}
