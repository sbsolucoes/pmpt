@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-8">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Comunicados e Avisos</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                        <div class="row g-5">
                            @foreach ($comunicado as $c)
                                <div class="col-sm-4">
                                    <div class="card border-0">
                                        <img src="{{ $c->fotoComum }}" class="card-img-top" alt="{{ $c->com_titulo }}">
    
                                        <div class="card-body">
                                            <p class="card-title fw-bolder text-uppercase">{{ $n->post_title }}</p>
                                            <a href="{{ route('noticias', $n->id) }}" class="btn btn-primary">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection        
