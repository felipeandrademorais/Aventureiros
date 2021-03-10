@extends('layouts.app')

@section('content')
        <div class="container">
            <form class="form" id="form-cadastro" action="{{ route('cadastro') }}" method="post">
                {{csrf_field()}}
                <section>
                    <h1 class="display-4">Nossos Contatos</h1>
                </section>
                <section class="center">
                   <h4>Se ficou com alguma dúvida ou simplesmente gostaria de reportar um erro, fique a vontade para entrar em contato através do telefone e endereço de e-mail abaixo:</h4>

                <div>
                   <p><b>E-mail:</b> luzeirinhosaventureiros@gmail.com</p>
                   <p><b>Telefone / WhatsApp:</b> (49) 9 9841-3300</p>
                </div>
                </section>
            </form>
        </div>
@endsection
