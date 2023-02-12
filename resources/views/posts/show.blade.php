@extends('master.master')
@section('content')

<div class="container-fluid">
    <div class="row float-left">
        <div class="col-md-12">

            <h3 class="title text-dark text-left my-3">{{$noticia->post_title}}</h3>
            <hr class="mt-2 mb-2">
            <p>{!! html_entity_decode($noticia->post_content) !!}<p>
            <br>

            @if($noticia->galeriaImagens->isNotEmpty())
                <div class="container">
                    <div class="row">
                        <div class="photo-gallery">
                            <div class="container">
                                <div class="intro">
                                    <h2 class="text-center">Galeria de Fotos</h2>
                                </div>
                                <div class="row photos mt-2">
                                    @foreach($noticia->galeriaImagens as $key => $galeria)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ $galeria->file_path }}" data-lightbox="photos"><img class="img-fluid" src="{{ $galeria->file_path }}" style="width: 294px; height: 200px"></a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif


        </div>
    </div>
</div>
@endsection
