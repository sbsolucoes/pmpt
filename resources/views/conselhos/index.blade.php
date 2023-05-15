@extends("master.master")
@section("content")
    <div class="container-fluid">
        <div class="row float-left">
            <div class="container">
                <h3 class="title text-dark text-left my-3">Conselhos</h3>
                <hr class="mt-2 mb-2">

                @foreach($conselhos as $conselho)
                    <div class="col-md-4 mt-2 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('conselho.bySlug', ["slug" => $conselho->slug]) }}" style="text-decoration: none">
                                    {{ $conselho->descricao }}
                                </a>
                                <span class="badge bg-primary">{{ $conselho->atos_count }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
