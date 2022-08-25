<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Documento $documento)
    {
        $this->atos_copy2 = $documento;                           
         
    }
    public function index(Request $request)
    {
        $filters = $request->except('_token');

        //if ($request->data1 != null && $request->data2 == null){$request->data2 = $request->data1;}

        $atos = Documento::where('status', 1)
            ->where('assunto', 'LIKE', "%{$request->nome}%")
            ->orwhere('numero', 'LIKE', "%{$request->nome}%")
            ->orWhereBetween('data', [$request->data1, $request->data2])
            ->orderBy('data', 'desc')
            ->orderBy('numero', 'DESC')
            ->Paginate(15);       

        /*
        {
            return redirect()
                    ->route('docs.atos')
                    ->withErrors(['errors' => 'Informe pelo menos uma condição de pesquisa']);
        }        
        
        if ($request->nome != null) {
            $request->nome->where('assunto', 'like', $request->nome);
        }
        
        if ($request->data1 != null){
            $request->data1->whereBetween('data', [$request->data1, $request->data2]);
        }
        //$documentos = $query->orderBy('nome', 'ASC')->get();
        */       

        return view('docs.atos', compact('atos'));
        //return view('docs.leis', compact('lei'));
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
