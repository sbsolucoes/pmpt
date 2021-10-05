@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Portarias</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                    @if(isset($portarias) && count($portarias) > 0)
                            <tr>
                                <th scope="col">Número</th>
                                <th scope="col">Data</th>
                                <th scope="col">Assunto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($portarias as $down)
                            <tr>
                                <td>{{ $down->numero }}</td>
                                <td>{{ date('d/m/Y', strtotime($down['data'])) }}</td>
                                <td>{{ $down->assunto }}</td>
                                <td>
                                    <a href="{{$down->file}}" stream="{{$down->url}}"  class="btn btn-primary" target="_blank">Abrir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    @endif                  
                        
                        {{$portarias->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection