@extends('master.master')
@section('content')
    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <h3 class="title text-dark text-left my-3">{{ $categoria->ds_categoria }}</h3>
                <hr class="mt-2 mb2">
                <br>
            </div>
            <div class="row">
                @foreach($noticias as $noticia)
                <div class="col-sm-3 mb-sm-0">
                    <div class="card mb-3">
                        <img src="{{ $noticia->url_file }}" class="card-img-top" alt="{{ $noticia->post_title }}" style="width: 100%; height: 287px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $noticia->post_title }}</h5>
                            <a href="{{  route('noticias', ["categoria_slug" => $noticia->categoria->slug, "publicacao_slug" => $noticia->post_name]) }}" class="btn btn-primary">Veja Mais</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $noticias->links() }}
            </div>
        </div>
    </div>
@endsection
