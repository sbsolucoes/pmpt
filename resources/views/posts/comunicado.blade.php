@extends('master.master')
@section('content')

<div class="container-fluid">
    <div class="row float-left">
        <div class="col-md-12 mh-100" style="height: 600px;">

            <h3 class="title text-dark text-left my-3">{{$comunicados->com_titulo}}</h3>
            <hr class="mt-2 mb-2">
            <p>{!! html_entity_decode($comunicados->com_content) !!}<p>
            <br>
        </div>                    
    </div>
</div>    
@endsection     
