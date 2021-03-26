@foreach ($cadastro as $cad)

<style>
    .page-break {
        page-break-after: always;
    }
</style>

<div class="container">
    <h1 class="display-4">Cadastro do Aventureiro</h1>
    <div class="line">
        <div class="grupo">
            <label><b>Nome: </b> {{ $cad->nome }}</label> 
        </div>
        <div class="grupo">
            <label><b>Endereço: </b>  {{ $cad->endereco }}</label>
        </div>
        <div class="grupo">
            <label><b>Nª: </b>  {{ $cad->numero }}</label>
        </div>
        <div class="grupo">
            <label><b>Bairro: </b>  {{ $cad->bairro }}</label>
        </div>
        <div class="grupo">
            <label><b>Cidade: </b>  {{ $cad->cidade }}</label>
        </div>
        <div class="grupo">
            <label><b>CEP: </b>  {{ $cad->cep }}</label>
        </div>
        <div class="grupo">
            <label><b>Estado: </b>  {{ $cad->estado }}</label>
        </div>
        <div class="grupo">
            <label><b>Referência: </b>  {{ $cad->referencia }}</label>
        </div>
    </div>

    <h1 class="display-2">Documentos</h1>
    <div class="line">
        <div class="grupo">
            <label><b>RG: </b>  {{ $cad->rg }}</label>
        </div>
        <div class="grupo">
            <label><b>Orgão Expedidor: </b>  {{ $cad->expedidor }}</label>
        </div>
        <div class="grupo">
            <label><b>CPF: </b>  {{ $cad->cpf }}</label>
        </div>
        <div class="grupo">
            <label><b>Certidão de Nascimento: </b>  {{ $cad->certidao_nascimento }}</label>
        </div>
    </div>

    <h1 class="display-2">Religião e Camiseta</h1>
    <div class="line">
        <div class="grupo">
            <label><b>Religião: </b>  {{ $cad->religiao }}</label>
        </div>
        <div class="grupo">
            <label><b>Tamanho Camiseta: </b>  {{ $cad->tamanho_camiseta }}</label>
        </div>
    </div>

    <h1 class="display-2">Dados Responsável</h1>
    <div class="line">
        <div class="grupo">
            <label><b>Nome do responsável: </b>  {{ $cad->nome_responsavel }}</label>
        </div>
        <div class="grupo">
            <label><b>CPF do responsável: </b>  {{ $cad->cpf_responsavel }}</label>
        </div>
        <div class="grupo">
            <label><b>RG do responsável: </b>  {{ $cad->rg_responsavel }}</label>
        </div>
        <div class="grupo">
            <label><b>Telefone de contato do responsável com DDD: </b>  {{ $cad->telefone_responsavel }}</label>
        </div>
        <div class="grupo">
            <label><b>E-mail do responsável: </b>  {{ $cad->email_responsavel }}</label>
        </div>
        <div class="grupo">
            <label><b>Parentesco: </b>  {{ $cad->parentesco_responsavel }}</label>
        </div>
    </div>
</div>


<div class="page-break"></div>


<div class="container">
    <h1 class="display-4">Ficha de Saúde Aventureiro</h1>
    <div class="line">
        <div class="grupo">
            <label><b>Nome: </b> {{ $cad->nome }}</label> 
        </div>
        <div class="grupo">
            @if($cad->doencas != 0)
                <label><b>Quais doenças já teve? </b> {{ $cad->doencas }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->cardiaco != 0)
                <label><b>Problemas Cardíacos? </b> {{ $cad->cardiaco }}</label> 
                <label><b>Quais medicamentos usa? </b> {{ $cad->cardiaco_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->alergia_medicamento != 0)
                <label><b>Alergia a algum medicamento?</b> {{ $cad->alergia_medicamento }}</label> 
                <label><b>Quais medicamentos possui alergia? </b> {{ $cad->alergia_medicamento_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->lactose != 0)
                <label><b>Possui intolerância a lactose?</b> {{ $cad->lactose }}</label> 
                <label><b>Quais medicamentos possui alergia? </b> {{ $cad->lactose_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->lactose != 0)
                <label><b>Possui intolerância a lactose?</b> {{ $cad->lactose }}</label> 
                <label><b>Qual medicamento usa? </b> {{ $cad->lactose_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->deficiencia != 0)
                <label><b>Possui algum deficiência?</b> {{ $cad->deficiencia }}</label> 
                <label><b>Qual deficiência? </b> {{ $cad->deficiencia_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->deficiencia != 0)
                <label><b>Transfusão de sangue?</b> {{ $cad->transfusao }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->alergia_pele != 0)
                <label><b>Alergia na pele?</b> {{ $cad->alergia_pele }}</label> 
                <label><b>Qual medicamento usa? </b> {{ $cad->alergia_pele_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->desmaio != 0)
                <label><b>Tem ou teve desmaios ou convulção?</b> {{ $cad->desmaio }}</label> 
                <label><b>Qual medicamento usa? </b> {{ $cad->desmaio_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->psicologicos != 0)
                <label><b>Problemas psicológicos?</b> {{ $cad->psicologicos }}</label> 
                <label><b>Descreva se é feito acompanhamento.</b> {{ $cad->psicologicos_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->alergia != 0)
                <label><b>Possui algum tipo de alergia?</b> {{ $cad->alergia }}</label> 
                <label><b>Qual medicamento usa?</b> {{ $cad->alergia_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            <label><b>Teve algum ferimento grave recente?</b> {{ $cad->ferimento }}</label> 
        </div>
        <div class="grupo">
            @if($cad->fratura != 0)
                <label><b>Algum tipo de fratura recente?</b> {{ $cad->fratura }}</label> 
                <label><b>Qual fratura?</b> {{ $cad->fratura_text }}</label> 
            @endif
        </div>
        <div class="grupo">
            @if($cad->fratura != 0)
                <label><b>Passou por cirurgia?</b> {{ $cad->cirurgia }}</label> 
                <label><b>Qual cirurgia?</b> {{ $cad->cirurgia_text }}</label> 
            @endif
        </div>
        <div class="grupo">
             <label><b>Motivo internação nos ultimos 5 anos.</b> {{ $cad->internacao_text }}</label> 
        </div>
        <div class="grupo">
             <label><b>Tipagem sanguínea.</b> {{ $cad->sangue }}</label> 
        </div>
        <div class="grupo">
             <label><b>Fator RH.</b> {{ $cad->fator_rh }}</label> 
        </div>


    </div>
</div>

<div class="page-break"></div>

@endforeach