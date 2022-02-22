<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Mail;
 use App\Mail\SendMail;
 use App\Models\Contato;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.contato');
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
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required'
        ]);

        // AQUI EH A DIFERENÇA DO HACKER
        $contato = new ContactForm($request);

        try {
            $contato->sendMail();
            $contato->saveMail();
            
            return back()
                ->with('success', 'Obrigado por nos contactar');
        } catch (\Exception $error) {
            return back()->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");
        }



        // $data = array(
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'mensagem' => $request->mensagem
        // );

        // Mail::to( config('mail.from.address') )
        //     ->send( new SendMail($data) );

        // return back()
        //         ->with('success', 'Obrigado por nos contactar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
