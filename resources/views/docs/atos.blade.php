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

                        <!--
                        <form  method="post"  >
                            @csrf
                            <input type="text" name="nome" placeholder="Digite a pesquisa" />
                            <input type="submit" value="Buscar" />

                        </form>
                    -->

                    <!--Inicio pesquisa detalhes -->
                <form class="form-horizontal" method="post" action="{{ route('docs.atos') }}">
                    <div class="form4">
                        @csrf
                        <div class="form-group form-group-sm">
                            <label class="control-label col-sm-3" for="nome">Documento:</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="nome" value="{{ old('nome') }}">
                            </div>
                        </div>
            
                        <div class="form-group form-group-sm">
                            <label class="control-label col-sm-3" for="data1">Período:</label>
                          <div class="col-sm-3">
                              <input class="form-control" type="date" name="data1" value="{{ old('data1') }}">
                          </div>
                          <label class="control-label col-sm-1" for="data2">A</label>
                          <div class="col-sm-3">
                              <input class="form-control" type="date" name="data2" value="{{ old('data2') }}">
                          </div>
                        </div>            
            
                        <div class="form-central" style="margin-top: 35px;">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                <i style="font-size: 20px;" class="glyphicon glyphicon-search" aria-hidden="true"></i> Pesquisar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                    <!--Fim Pesquisa Detalhes-->
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
