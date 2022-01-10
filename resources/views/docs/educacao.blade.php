@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Educação - Editais </h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                    @if(isset($educacao) && count($educacao) > 0)
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Documento</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($educacao as $down)
                            <tr>
                                <td>{{ $down->dtpub }}</td>
                                <td> {!! html_entity_decode($down->deltDoc) !!}</td>  
                                                             
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
                        
                        {{$educacao->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection