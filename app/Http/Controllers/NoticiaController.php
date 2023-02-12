<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Noticia;
use App\Models\PostGalery;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Noticia $noticia, Comunicado $comunicado)
    {
        $noticias = $noticia->onlyActives();
        $comunicados = $comunicado->onlyActive();

        return view('home', compact('noticias','comunicados'));

    }


    public function show(string $categoriaSlug, string $publicacaoSlug, Noticia $post)
    {
        $noticia = $post->findBySlugs($categoriaSlug, $publicacaoSlug);
        return view('posts.show',compact('noticia'));

    }
}
