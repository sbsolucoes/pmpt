@extends('master.master')
@section('content')

<div class="container-fluid">
    <div class="row float-left">
        <div class="col-md-12">

            <h3 class="title text-dark text-left my-3">{{$noticias->post_title}}</h3>
            <hr class="mt-2 mb-2">
            <p>{!! html_entity_decode($noticias->post_content) !!}<p>
            <br>

            @if($galerias->isNotEmpty())
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <h3 class="text-uppercase">Galeria de fotos</h3>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="width: 100%; max-height: 600px">
                                <div class="carousel-indicators">
                                    @foreach($galerias as $key => $galeria)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : ''  }}" aria-label="Slide {{ $key + 1 }}"></button>
                                    @endforeach

                                </div>
                                <div class="carousel-inner" style="width: 100%;height: 600px;">
                                    @foreach($galerias as $key => $galeria)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : ''  }}">
                                            <img src="{{ $galeria->file_path }}" class="d-block" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
            @endif


        </div>
    </div>
</div>
@endsection
