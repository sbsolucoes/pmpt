@extends("master.master")
@section("content")
    <div class="container-fluid">
        <div class="row float-left">
            <div class="container">
                <h3 class="title text-dark text-left my-3">Categorias</h3>
                <hr class="mt-2 mb-2">

                @foreach($categorias as $categoria)
                <div class="col-md-3 mt-2 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('post.byCategorySlug', ["slug" => $categoria->slug]) }}" style="text-decoration: none">
                                {{ $categoria->ds_categoria }}
                            </a>
                            <span class="badge bg-primary">{{ $categoria->noticia_count }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
