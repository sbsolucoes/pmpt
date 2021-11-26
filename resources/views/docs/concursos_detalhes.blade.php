@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12 mh-100" style="min-height: 100%;">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Concursos e Processos Seletivos</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">{{ $concursos->tipoConc }} Nº {{ $concursos->numero }}</h5>
                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                            @if(isset($conc_det) && count($conc_det) > 0)
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Data</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($conc_det as $down)
                                    <tr>
                                        <td>{{ $down->tituloDetalhe }}</td>
                                        <td>{{ date('d/m/Y', strtotime($down['dtPub'])) }}</td>
                                        <td>

                                            <a href="{{ $down->file }}" class="btn btn-primary"  target="_blank">Abrir</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            @endif

                                {{$conc_det->links()}}


                        </div>

                        </div>
                    </div>
                    <br>




            </div>
        </div>
    </div>

@endsection
