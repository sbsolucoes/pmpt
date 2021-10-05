@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Escolas</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                    @if(isset($escolas) && count($escolas) > 0)
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Telefone</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($escolas as $down)
                            <tr>
                                <td>{{ $down->nome }}</td>
                                <td>{{ $down->rua }}, {{ $down->numero }}</td>                                
                                <td>{{ $down->bairro }}</td>
                                <td>{{ $down->telefone }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    @endif                  
                        
                        {{$escolas->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection