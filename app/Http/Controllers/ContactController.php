<?php

namespace App\Http\Controllers;

use App\Http\Requests\OuvidoriaRequest;
use App\Mail\MeAjudaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $url = route("contato.sendEmail");
        return view('contact.contato', compact('url'));
    }

    public function ouvidoria(): View
    {
        $url = route("ouvidoria.sendEmail");
        return view('contact.contato', compact('url'));
    }

    public function contatoEmail(OuvidoriaRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->sendEmail($request, "contato");
    }

    public function ouvidoriaEmail(OuvidoriaRequest $request): \Illuminate\Http\RedirectResponse
    {

        return $this->sendEmail($request, "ouvidoria-saude");
    }

    protected function sendEmail(Request $request, string $origin): \Illuminate\Http\RedirectResponse
    {
        try {
            Mail::to("")->send(new MeAjudaMail(
                array_merge(
                    $request->validated(),
                    ['today' => now()->format('d/m/Y H:i:s')]
                ), $origin
            ));
            return redirect()->back()->with("success", "Solicitação enviada com sucesso");
        }catch (\Throwable $throwable){
            return redirect()->back()->with("error", "Não foi possivel atender a sua solicitação");
        }
    }

}
