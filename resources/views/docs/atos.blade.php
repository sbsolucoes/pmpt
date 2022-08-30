@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Pesquisa de Atos</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>

                    <div class="search">
                        <h2 class="title">Pesquisar Atos</h2>
                        <br>

                        
                        <form  method="post"  >
                            @csrf
                            <input type="text" name="nome" placeholder="Digite a pesquisa" />
                            <input type="submit" value="Buscar" />

                        </form>
                    

                    

                    </div>
                    <table class="table table-striped">
                        <thead>
                    @if(isset($atos) && count($atos) > 0)
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Data</th>
                        <th scope="col">Assunto</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($atos as $down)
                        <tr>
                            <td>{{ $down->numero }}</td>
                            <td>{{ date('d/m/Y', strtotime($down['data'])) }}</td>
                            <td>{{ $down->assunto }}</td>
                            <td>
                                <a href="{{$down->file}}"  class="btn btn-primary" target="_blank">Abrir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            <div class="d-flex justify-content-center">
                @endif
                    @if(isset($filters))
                    {{$atos->appends($filters)->links()}}

                @endif
            </div>
        </div>
    </div>


@endsection
