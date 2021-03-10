@extends('layouts.app')

@section('content')
    
    <div class="container-img">
        <div class="container-text">
            <h1 class="display-3">Inscrições Clube de Aventureiros 2021</h1>
            <h2 class="display-4">Venha fazer parte desta família</h2>
            <div id="button-text">
                <a href="{{ route('cadastro') }}">Inscrições</a>
            </div>
        
        </div>
    </div>

@endsection
