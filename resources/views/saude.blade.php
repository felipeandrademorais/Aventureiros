@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form" id="form-saude" action="{{ route('saude') }}" method="post">
            {{csrf_field()}}
             <section>
                <h1 class="display-4">Ficha de Saúde Aventureiro</h1>
            </section>
            <section>
                <input type="hidden" name="id_cadastro" id="id_cadastro" value="{{ session('idCadastro') }}" >          
                <div class="line">
                    <p>Quais doenças já teve?</p> 
                    <div class="grupo-radio">
                            <input type="checkbox" name="doencas" id="1"/>
                            <Label>Catapora</Label>
                            <input type="checkbox" name="doencas" id="2"/>
                            <Label>Pneumonia</Label>
                            <input type="checkbox" name="doencas" id="3"/>
                            <Label>Cólera</Label>
                            <input type="checkbox" name="doencas" id="4"/>
                            <Label>Varíola</Label>
                            <input type="checkbox" name="doencas" id="5"/>
                            <Label>Renite</Label>
                            <input type="checkbox" name="doencas" id="6"/>
                            <Label>Meningite</Label>
                            <input type="checkbox" name="doencas" id="7"/>
                            <Label>Malária</Label>
                            <input type="checkbox" name="doencas" id="8"/>
                            <Label>Rubéola</Label>
                            <input type="checkbox" name="doencas" id="9"/>
                            <Label>Coqueluche</Label>
                            <input type="checkbox" name="doencas" id="10"/>
                            <Label>Bronquite</Label>
                            <input type="checkbox" name="doencas" id="11"/>
                            <Label>Hepatite</Label>
                            <input type="checkbox" name="doencas" id="12"/>
                            <Label>Febre Amarela</Label>
                            <input type="checkbox" name="doencas" id="13"/>
                            <Label>Sarampo</Label>
                            <input type="checkbox" name="doencas" id="14"/>
                            <Label>Difteria</Label>
                            <input type="checkbox" name="doencas" id="15"/>
                            <Label>Dengue</Label>
                            <input type="checkbox" name="doencas" id="16"/>
                            <Label>H1N1</Label>
                            <input type="checkbox" name="doencas" id="17"/>
                            <Label>Tétano</Label>
                            <input type="checkbox" name="doencas" id="18"/>
                            <Label>Caxumba</Label>
                    </div>
                </div>

                <div class="line">
                    <p>Problemas Cardíacos?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="cardiaco" onclick="hiddenElementOff('cardiaco_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="cardiaco" onclick="hiddenElementOn('cardiaco_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="cardiaco_text">
                        <label>Quais medicamentos usa?</label>
                        <input type="text" name="cardiaco_text" id="cardiaco_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Alergia a algum medicamento?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="alergia_medicamento" onclick="hiddenElementOff('alergia_medicamento_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="alergia_medicamento" onclick="hiddenElementOn('alergia_medicamento_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="alergia_medicamento_text">
                        <label>Quais medicamentos possui alergia?</label>
                        <input type="text" name="alergia_medicamento_text" id="alergia_medicamento_text" />
                    </div>
                </div>

                 <div class="line">
                    <p>Possui intolerância a lactose?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="lactose" onclick="hiddenElementOff('lactose_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="lactose" onclick="hiddenElementOn('lactose_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="lactose_text">
                        <label>Qual medicamento usa?</label>
                        <input type="text" name="lactose_text" id="lactose_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Possui algum deficiência?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="deficiencia" onclick="hiddenElementOff('deficiencia_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="deficiencia" onclick="hiddenElementOn('deficiencia_text')"  id="0"/>
                        <Label>Não</Label>
                    </div>
                
                    <div class="grupo-input hidden" id="deficiencia_text">
                        <label>Qual deficiência?</label>
                        <input type="text" name="deficiencia_text" id="deficiencia_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Transfusão de sangue?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="transfusao" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="transfusao" id="0"/>
                        <Label>Não</Label>
                    </div>
                </div>

                <div class="line">
                    <p>Alergia na pele?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="alergia_pele" onclick="hiddenElementOff('alergia_pele_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="alergia_pele" onclick="hiddenElementOn('alergia_pele_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="alergia_pele_text" >
                        <label>Qual medicamento usa?</label>
                        <input type="text" name="alergia_pele_text" id="alergia_pele_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Tem ou teve desmaios ou convulção?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="desmaio" onclick="hiddenElementOff('desmaio_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="desmaio" onclick="hiddenElementOn('desmaio_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="desmaio_text">
                        <label>Qual medicamento usa?</label>
                        <input type="text" name="desmaio_text" id="desmaio_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Problemas psicológicos?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="psicologicos" onclick="hiddenElementOff('psicologicos_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="psicologicos" onclick="hiddenElementOn('psicologicos_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
                
                    <div class="grupo-input hidden" id="psicologicos_text">
                        <label>Descreva se é feito acompanhamento.</label>
                        <input type="text" name="psicologicos_text" id="psicologicos_text" />
                    </div>
                </div>
                
                <div class="line">
                    <p>Possui algum tipo de alergia?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="alergia" onclick="hiddenElementOff('alergia_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="alergia" onclick="hiddenElementOn('alergia_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
                
                    <div class="grupo-input hidden" id="alergia_text" >
                        <label>Qual medicamento usa?</label>
                        <input type="text" name="alergia_text" id="alergia_text" />
                    </div>
                </div>

                 <div class="line">
                    <p>Teve algum ferimento grave recente?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="ferimento" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="ferimento" id="0"/>
                        <Label>Não</Label>
                    </div>
                </div>

                <div class="line">
                    <p>Algum tipo de fratura recente?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="fratura" onclick="hiddenElementOff('fratura_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="fratura" onclick="hiddenElementOn('fratura_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
                
                    <div class="grupo-input hidden" id="fratura_text">
                        <label>Qual fratura?</label>
                        <input type="text" name="fratura_text" id="fratura_text" />
                    </div>
                </div>

                <div class="line">
                    <p>Passou por cirurgia?</p>
                    <div class="grupo-radio">
                        <input type="radio" name="cirurgia" onclick="hiddenElementOff('cirurgia_text')" id="1"/>
                        <Label>Sim</Label>
                        <input type="radio" name="cirurgia" onclick="hiddenElementOn('cirurgia_text')" id="0"/>
                        <Label>Não</Label>
                    </div>
               
                    <div class="grupo-input hidden" id="cirurgia_text">
                        <label>Qual cirurgia?</label>
                        <input type="text" name="cirurgia_text" id="cirurgia_text" />
                    </div>
                </div>

                <div class="line">
                    <div class="grupo">
                        <p>Motivo internação nos ultimos 5 anos.</p>
                        <textarea name="internacao_text" id="internacao_text">
                        </textarea>
                    </div>
                </div>

                <div class="line">
                    <p>Tipagem sanguínea</p>
                    <div class="grupo-radio">
                        <input type="radio" name="sangue" id="A"/>
                        <label>A</label>
                        <input type="radio" name="sangue" id="B"/>
                        <label>B</label>
                         <input type="radio" name="sangue" id="O"/>
                        <label>O</label>
                         <input type="radio" name="sangue" id="AB"/>
                        <label>AB</label>
                    </div>
                </div>
                <div class="line">
                    <p>Fator RH</p>
                    <div class="grupo-radio">
                        <input type="radio" name="fator_rh" id="positivo"/>
                        <label>Positivo</label>
                        <input type="radio" name="fator_rh" id="negativo"/>
                        <label>Negativo</label>
                    </div>
                </div>
            </section>

            <section>
                <div class="grupo-radio">
                    <p id="responsabilidade_text"><input type="checkbox" name="responsabilidade" id="responsabilidade" /> Me responsabilizo por todas as informações desta Ficha Médica, e garanto nenhuma outra informação foi omitida, que pode vir à prejudicar o membro e o Clube, em caso de uma Atendimento Médico Emergêncial.</p> 
                </div>
            </section>

            <section class="section-submit">
                    <input type="button" onclick="validaCamposSaude()"  value="Enviar" />
            </section>
        </form>
    </div>
@endsection
