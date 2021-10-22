<?php

namespace App\Http\Controllers;

use App\Models\Licitacao;
use App\Models\DetalheLicitacao;

use App\Http\Controllers\date;

use Illuminate\Http\Request;

class LicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /*
     public function index()
    {
        $licitacao = Licitacao::where('tipoLicitacao','=', 6)
        ->orderBy(Licitacao::raw("DATE_FORMAT(dtCad,'%Y')"), 'DESC')        
        ->orderBy('numeroLicitacao', 'desc')
        ->Paginate(5);
        return view('docs.licitacao', compact('licitacao'));
    }
     */
    public function index(Request $request)
    {
        
        if($request){

            $query=trim($request->get('tipoLic'));
            $variavel = $request->get('label');
            
            /*
            $label=$request($query){
                if($query = '2' => 'Chamada Pública'                
                if($query = '3' => 'Concorrência Pública'
                if($query = '4' =>' Leilão'
                if($query = '5' => 'Pregão Eletrônico'
                if($query = '6' => 'Pregão Presencial'	
                if($query = '7' => 'Tomada de Preços'
                
            };
            */

            $licitacao = Licitacao::where('tipoLicitacao',$query)
            ->where('status',1)
            ->orderBy(Licitacao::raw("DATE_FORMAT(dtCad,'%Y')"), 'DESC')        
            ->orderBy('numeroLicitacao', 'desc')
            ->Paginate(5);
            return view('docs.licitacao', compact('licitacao', 'query', 'variavel'));  
        } 
            //return echo('A pesquisa não encontrou resultados');

        $licitacao = Licitacao::where('status',1)
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
