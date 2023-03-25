<?php

namespace App\Http\Controllers;

use App\Models\Licitacao;
use Illuminate\Http\Request;

class LicitacaoController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if($request->tipoLic){
            $licitacao = Licitacao::where([
                'tipoLicitacao' => $request->tipoLic,
                'status' => 1
            ])
            ->orderBy(Licitacao::raw("DATE_FORMAT(dtCad,'%Y')"), 'DESC')
            ->orderBy('numeroLicitacao', 'desc')
            ->paginate(5);
            return view('docs.licitacao', compact('licitacao'));
        }
        return view('docs.licitacao');
    }

}
