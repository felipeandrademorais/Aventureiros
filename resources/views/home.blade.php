@extends('layouts.app')

@section('content')
    
        <div class="container-img">
            <h1 class="display-4 ">Inscrições Clube de Aventureiros 2021</h1>
            <h4>Venha fazer parte dessa família</h4>
            <div id="button-text">
                <a href="{{ route('cadastro') }}">Inscreva-se</a>
            </div>
        </div>
    
@endsection
