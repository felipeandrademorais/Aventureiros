@extends('layouts.app')

@section('content')
        <div class="container">
            <form class="form" id="form-cadastro" action="{{ route('cadastro') }}" method="post">
                {{csrf_field()}}
                <section>
                    <h1 class="display-4">Cadastro do Aventureiro</h1>
                </section>
                <section>
                    <div class="line">
                        <div class="grupo">
                            <label>Nome</label>
                            <input type="text" class="required" name="nome" id="nome"  placeholder="Digite seu nome"/>
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
                            <input type="text" class="required" name="endereco" id="endereco"  placeholder="Endereço"/>
                        </div>

                        <div class="grupo">
                            <label>Nª</label> 
                            <input type="number" name="numero" id="numero" placeholder="Nº Residência"/>
                        </div>

                        <div class="grupo">
                            <label>Bairro</label>
                            <input type="text" class="required" name="bairro" id="bairro"  placeholder="Digite seu bairro"/>
                        </div>

                        <div class="grupo">
                            <label>Cidade</label>
                            <input type="text" class="required" name="cidade" id="cidade"  placeholder="Ex: Joaçaba"/>
                        </div>

                        <div class="grupo">
                            <label>CEP</label> 
                            <input type="text" name="cep" id="cep"  placeholder="Digite seu cep"/>
                        </div>

                        <div class="grupo">
                            <label>Estado</label> 
                            <input type="text" class="required" name="estado" id="estado"  placeholder="Digite seu estado"/>
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
                            <label>Certidão de Nascimento</label> <input type="text" class="required" name="certidao_nascimento" id="certidao_nascimento"  placeholder="Digite a Certidão de Nascimento"/>
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
                        <label>Nome do responsável</label> 
                        <input type="text" name="nome_responsavel" class="required" id="nome_responsavel"  placeholder="Ex: Mariana da Silva"/>
                    </div>
                    <div class="grupo">
                        <label>CPF do responsável</label> 
                        <input type="text" name="cpf_responsavel"  class="required" id="cpf_responsavel"  placeholder="Ex: 08851611245"/>
                    </div>
                    <div class="grupo">
                        <label>RG do responsável</label> 
                        <input type="text" name="rg_responsavel" class="required" id="rg_responsavel"  placeholder="Ex: 4754896"/>
                    </div>
                    <div class="grupo">
                        <label>Telefone de contato do responsável com DDD</label> 
                        <input type="text" name="telefone_responsavel" class="required" id="telefone_responsavel" placeholder="Ex: 4935213000"/>
                    </div>
                    <div class="grupo">
                        <label>E-mail do responsável</label> 
                        <input type="text" name="email_responsavel" class="required" id="email_responsavel"  placeholder="Ex: exemplo@exemplo.com.br"/>
                    </div>
                    <div class="grupo">
                        <label>Parentesco</label> 
                        <select  name="parentesco_responsavel" id="parentesco_responsavel" placeholder="Selecione o parentesco">
                            <option value="pai">Pai</option>
                            <option value="mae">Mãe</option>
                            <option value="tio">Tio</option>
                            <option value="tia">Tia</option>
                            <option value="avo">Avô</option>
                            <option value="ava">Avó</option>
                            <option value="irmao">Irmão</option>
                            <option value="irma">Irmã</option>
                            <option value="outros">Outro</option>
                        </select>
                    </div>
                </section>

                <section>
                    <p id="responsabilidade_text"><input type="checkbox" name="responsabilidade" class="required" id="responsabilidade" /> Me responsabilizo por todas as informações deste Formulário de Cadastro, e garanto como fiel e verdadeiro</p> 
                </section>

                <section class="section-submit">
                    <input type="button" id="submit_cadastro" onclick="validaCamposCadastro()" value="Próximo" />
                </section>
            </form>
        </div>
@endsection
