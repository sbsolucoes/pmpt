<?php

namespace App\Http\Controllers\Documentos;

use App\Http\Controllers\Controller;
use App\Models\AtosTipo;
use App\Models\Documento;
use Illuminate\Http\Request;

class ConselhoController extends Controller
{
    public function index(AtosTipo $atosTipo)
    {
        $conselhos = $atosTipo->getAdivices();

        return view('conselhos.index', compact('conselhos'));
    }

    public function bySlug(Request $request, string $slug, Documento $documento)
    {
        $documentos = $documento->findByType($slug, $request->all(), 15);
        $atoTipo = AtosTipo::select('descricao')->where('slug', $slug)->firstOrFail();

        return view('docs.atos', compact('documentos', 'atoTipo'));
    }
}
