@extends('master.master')

@section('content')


<div class="container">
    <div class="row">

        

        <div class="col-md-6 jumbotron mx-auto">
            <form action="{{ url('/') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <h2>Envie sua reclamação / sugestão / elogio</h2>
                </div>

                @if(count($errors) > 0)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Preencha os dados corretamente!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Obrigado!</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>OOOPPPSSSS!</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Seu email">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" class="form-control" cols="10" rows="5" placeholder="Sua mensagem"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>
</div>

@endsection
