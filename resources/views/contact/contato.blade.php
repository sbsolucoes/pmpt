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
                    <form  method="POST" action="{{ route('contato.sendEmail') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">
                            @error("nome")
                            <div class="valid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group mt-2">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" class="form-control" cols="30" rows="10"></textarea>
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
