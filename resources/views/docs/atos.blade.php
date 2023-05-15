@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>@isset($atoTipo) {{ $atoTipo->descricao }} @else Pesquisa de Atos @endisset</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>

                    <div class="search">
                        <form class="mb-5"  method="GET">
                            <div class="row container">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nome" placeholder="Digite a pesquisa" value="{{ request()->has('nome') ? request()->nome : '' }}" />
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Procurar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Número</th>
                                <th scope="col">Data</th>
                                <th scope="col">Categoria Documento</th>
                                <th scope="col">Assunto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($documentos as $documento)
                            <tr>
                                <td>{{ $documento->numero }}</td>
                                <td>{{ $documento->data_publicacao }}</td>
                                <td>{{ $documento->atosTipo->descricao }}</td>
                                <td>{{ $documento->assunto }}</td>
                                <td>
                                    <a href="{{ $documento->file }}"  class="btn btn-primary" target="_blank">Abrir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

            </div>

            <div class="d-flex justify-content-center">
                {{ $documentos->appends(request()->all())->links() }}
            </div>
        </div>
    </div>


@endsection
