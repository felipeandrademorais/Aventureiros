@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form" action="{{ route('cadastro') }}" method="post">
            {{csrf_field()}}
            <section>
                <div class="line">
                    <div class="grupo">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome"  placeholder="Digite seu nome"/>
                    </div>

                    <div class="grupo-radio">
                        <p>Sexo</p> 
                            <Label>Masculino</Label>
                            <input type="radio" name="genero" id="m"/>
                            <Label>Feminino</Label>
                            <input type="radio" name="genero" id="f"/>
                        <br>
                    </div>
                </div>

                <div class="line">
                    <div class="grupo">
                        <label>Endereço</label>
                        <input type="text" name="endereco" id="endereco"  placeholder="Digite seu endereço"/>
                    </div>

                    <div class="grupo">
                        <label>Nª</label> 
                        <input type="text" name="numero" id="numero"  placeholder="Nº Residência"/>
                    </div>

                    <div class="grupo">
                        <label>Bairro</label>
                        <input type="text" name="bairro" id="bairro"  placeholder="Digite seu bairro"/>
                    </div>

                    <div class="grupo">
                        <label>Cidade - Estado</label>
                        <input type="text" name="cidade" id="cidade"  placeholder="Ex: Joaçaba-SC"/>
                    </div>

                    <div class="grupo">
                        <label>CEP</label> 
                        <input type="text" name="cep" id="cep"  placeholder="Digite seu cep"/>
                    </div>

                    <div class="grupo">
                        <label>Estado</label> 
                        <input type="text" name="estado" id="estado"  placeholder="Digite seu estado"/>
                    </div>
                    
                    <div class="grupo">
                        <label>Referência</label> 
                        <input type="text" name="referencia" id="referencia"  placeholder="Digite uma referência"/>
                    </div>
                </div>

                <div class="line">
                    <div class="grupo">
                        <label>RG</label> <input type="text" name="rg" id="rg"  placeholder="Digite seu rg"/>
                    </div>
                    <div class="grupo">
                        <label>Orgão Expedidor</label> <input type="text" name="expedidor" id="expedidor"  placeholder="Digite o orgão expedidor do RG"/>        
                    </div>
                    <div class="grupo">
                        <label>CPF</label> <input type="text" name="cpf" id="cpf"  placeholder="Digite seu cpf"/>
                    </div>
                    <div class="grupo">
                        <label>Certidão de Nascimento</label> <input type="text" name="certidao_nascimento" id="certidao_nascimento"  placeholder="Digite a Certidão de Nascimento"/>
                    </div>    

                </div>

                <div class="line">
                    <div class="grupo">
                        <label>Religião</label> 
                        <input type="text" name="religiao" id="religiao"  placeholder="Digite sua religião"/>
                    </div>

                     <div class="grupo">
                        <label>Tamanho Camiseta</label> 
                        <input type="text" name="tamanho_camiseta" id="tamanho_camiseta"  placeholder="Digite o número da tamanho da camiseta"/>
                    </div>
                </div>
            </section>

            <section>
                <div class="grupo">
                    <label>Nome do Pai</label> 
                    <input type="text" name="nome_pai" id="nome_pai"  placeholder="Nome do pai"/>
                </div>
                <div class="grupo">
                    <label>Telefone de contato do Pai</label> 
                    <input type="text" name="telefone_pai" id="telefone_pai"  placeholder="Telefone do pai"/>
                </div>
                 <div class="grupo">
                    <label>E-mail do Pai</label> 
                    <input type="text" name="email_pai" id="email_pai"  placeholder="E-mail do pai"/>
                </div>

                <div class="grupo">
                    <label>Nome da Mãe</label> 
                    <input type="text" name="nome_mae" id="nome_mae"  placeholder="Nome da mãe"/>
                </div>
                <div class="grupo">
                    <label>Telefone de contato da Mãe</label> 
                    <input type="text" name="telefone_mae" id="telefone_mae"  placeholder="Telefone da mãe"/>
                </div>
                <div class="grupo">
                    <label>E-mail da Mãe</label> 
                    <input type="text" name="email_mae" id="email_mae"  placeholder="E-mail da Mãe"/>
                </div>
            </section>

            <section>
                <input type="checkbox" name="responsabilidade" id="responsabilidade" /><label>Me responsabilizo por todas as informações deste Formulário de Cadastro, e garanto como fiel e verdadeiro</label> 
            </section>

            <input type="submit" value="Enviar" />
        </form>
    </div>
@endsection
