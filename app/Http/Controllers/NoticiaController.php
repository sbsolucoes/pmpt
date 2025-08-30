<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Noticia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class NoticiaController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(Noticia $noticia, Comunicado $comunicado)
    {
        $noticias = $noticia->onlyActives();
        $comunicados = $comunicado->onlyActive();

        return view('home', compact('noticias', 'comunicados'));

    }

    public function showCategories(Categoria $categoria)
    {
        $categorias = $categoria->withCount(['noticia' => function ($query) {
            $query->where('post_status', true);
        }])->active()->get();

        return view('posts.categorias', compact('categorias'));
    }

    public function postByCategorieSlug(string $slug, Categoria $categoria, Noticia $noticia)
    {
        $categoria = $categoria->bySlug($slug)->firstOrFail();
        $noticias = $noticia->getAllBySlug($slug);

        return view('posts.postByCategorySlug', compact('noticias', 'categoria'));
    }

    public function show(string $categoriaSlug, string $publicacaoSlug, Noticia $post)
    {

        $noticia = $post->findBySlugs($categoriaSlug, $publicacaoSlug);

        return view('posts.show', compact('noticia'));

    }
}
