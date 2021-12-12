@extends('master.master')

@section('content')

<div class="container-fluid">
    <hr class="mt-2 mb-2">
        <h2 class="font-weight-light text-center text-lg-left mt-2 mb-1">Departamentos</h2>
        <hr class="mt-2 mb-2">

</div>
                   

<div class="container-fluid">                    
                    
    <div class="row">
    <div class="col">
        @foreach($departamento as $down )
            <div class="card  float-left">
                <h5 class="card-header">{{ $down->nomeDepto }}</h5>
                <div class="card-body">
                    <p class="card-text">Endereço: {{ $down->deptoEnd }}</p>
                    <p class="card-text">Email: {{ $down->email }}</p>
                    <p class="card-text">Telefone: {{ $down->fone }}</p>
                    <!--<p class="card-text">Diretor/Coordenador: {{ $down->nomeDire }}</p>-->
                                        
                </div>
            </div>
        <br>@endforeach
    </div>
    </div>    
                    
                        
            
        
</div>

@endsection
