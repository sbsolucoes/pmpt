@extends('master.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 offset mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    Envie sua reclamação / Sugestão / Elogio
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <x-alert type="success" message="{{ session('success') }}"/>
                    @endif

                    @if(session('error'))
                        <x-alert type="danger" message="{{ session('error') }}"/>
                    @endif

                    <form class="needs-validation"  method="POST" action="{{ $url }}">
                        @csrf
                        <div class="form-group">
                            <x-form-input name="nome" label="Nome" placeholder="Preencha seu nome" />
                        </div>
                        <div class="form-group mt-2">
                            <x-form-input name="email" label="Email" placeholder="Preencha seu email" />
                        </div>
                        <div class="form-group mt-2">
                            <x-form-textarea name="mensagem" label="Mensagem" placeholder="Digite aqui sua mensagem" />
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
