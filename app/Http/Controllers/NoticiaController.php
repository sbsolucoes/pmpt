<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    /**
     * @param Noticia $noticia
     * @param Comunicado $comunicado
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
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
