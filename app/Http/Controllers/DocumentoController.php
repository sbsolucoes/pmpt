<?php

namespace App\Http\Controllers;

use App\Enuns\DocumentosEnum;
use App\Models\AtosTipo;
use App\Models\Documento;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * @var int
     */
    private $perPage = 15;

    /**
     * @param Request $request
     * @param Documento $documento
     * @return Application|Factory|View
     */
    public function index(Request $request, Documento $documento)
    {
        $documentos = $documento->allDocuments($request->all(), $this->perPage);
        return view('docs.atos', compact('documentos'));
    }

    /**
     * @param Request $request
     * @param string $ato
     * @param Documento $documento
     * @return Application|Factory|View
     */
    public function getAto(Request $request, string $ato, Documento $documento)
    {
        $documentos = $documento->findByType($ato, $request->all(), $this->perPage);
        $atoTipo = AtosTipo::select('descricao')->where('slug', $ato)->firstOrFail();
        return view("docs.atos", compact('documentos', 'atoTipo'));
    }

}
