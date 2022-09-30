@extends('adminlte::page')

@section('title', 'Cadastro fornecedores')

@section('content_header')
    <div id="fornecedores">
        <div class="text_title">
            <h1>Fornecedores</h1>
            <p>Cadastrar</p>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ route('cadastrarFornecedores') }}" method="POST">
            @csrf
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Dados do Fornecedor</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <div class="row">
                        <div class="tipo_pessoa col-md-12">
                            <div class="form-check pessoa_juridica">
                                <input class="form-check-input " type="radio" name="flexRadioDisabled"
                                    id="flexRadioCheckedDisabled" checked>
                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                    Pessoa Juridica
                                </label>
                            </div>
                            <div class="form-check pessoa_fisica">
                                <input class="form-check-input " type="radio" name="flexRadioDisabled"
                                    id="flexRadioDisabled">
                                <label class="form-check-label" for="flexRadioDisabled">
                                    Pessoa Fisica
                                </label>
                            </div>
                        </div>
                        <div class="formulario_juridico row">
                            <div class="mb-3 col-md-3">
                                <label for="cnpj" class="form-label">CNPJ <span>*</span></label>
                                <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="razao_social" class="form-label"> Razão Social <span>*</span></label>
                                <input type="text" class="form-control" name="razao_social" id="razao_social" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="nome_fantasia" class="form-label">Nome Fantasia <span>*</span></label>
                                <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="indicador_estadual" class="form-label">Indicador de Inscrição Estadual
                                    <span>*</span></label>
                                <select class="form-select" required name="indicador_estadual" id="indicador_estadual"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="Contribuinte">Contribuinte</option>
                                    <option value="Contribuinte Isento">Contribuinte isento</option>
                                    <option value="Não contribuinte">Não contribuinte</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inscricao_estadual" class="form-label">Inscrição Estadual </label>
                                <input type="text" class="form-control" name="inscricao_estadual" id="inscricao_estadual"
                                    disabled>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inscricao_minicipal" class="form-label">Inscrição Municipal</label>
                                <input type="text" class="form-control" name="inscricao_minicipal"
                                    id="inscricao_minicipal">
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="situacao_cnpj" class="form-label">Situação CNPJ</label>
                                <input type="text" class="form-control" name="situacao_cnpj" id="situacao_cnpj" disabled>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="recolimento" class="form-label">Recolhimento <span>*</span></label>
                                <select class="form-select" required name="recolimento" id="recolimento"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="reconhecer">A reconhecer pelo prestador</option>
                                    <option value="retido">Retido pelo Tomador</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="ativo_juridico" class="form-label">Ativo <span>*</span></label>
                                <select class="form-select" required name="ativo_juridico" id="ativo_juridico"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario_fisica row">
                            <div class="mb-3 col-md-3">
                                <label for="cpf" class="form-label">CPF <span>*</span></label>
                                <input type="text" class="form-control" name="cpf" id="cpf" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nome" class="form-label"> Nome <span>*</span></label>
                                <input type="text" class="form-control" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="apelido" class="form-label">Apelido </label>
                                <input type="text" class="form-control" name="apelido" id="apelido">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="rg" class="form-label"> RG <span>*</span></label>
                                <input type="text" class="form-control" name="rg" id="rg" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="ativo_fisico" class="form-label">Ativo <span>*</span></label>
                                <select class="form-select" required name="ativo_fisico" id="ativo_fisico"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                </select>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Contato Principal</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <div class="row todos_contatos">
                        <div class="contatos_pricipal_linhas row">
                            <div class="mb-3 col-md-3">
                                <label for="telefone" class="form-label">Telefone <span>*</span></label>
                                <input type="text" class="form-control" name="telefone[]" id="telefone" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="tipo_telefone" class="form-label">
                                    Tipo<span>*</span>
                                </label>
                                <select class="form-select" required name="tipo_telefone[]" id="tipo_telefone"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="Residencial">Residencial</option>
                                    <option value="comercial">Comercial</option>
                                    <option value="celular">Celular</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email[]" id="email">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="tipo_email" class="form-label">
                                    Tipo
                                </label>
                                <select class="form-select" name="tipo_email[]" id="tipo_email"
                                    aria-label="Default select example">
                                    <option value>Selecione</option>
                                    <option value="Pessoal">Pessoal</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-1 botao">
                                <button type="button" class="adicionar btn">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="adiciona_contatos">
                <div class="mb-3 col-md-2 botao">
                    <button type="button" class="adicionar_adicionais btn"><i class="fa fa-plus"></i> Contato
                        adicional</button>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Contato Adicionais</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <div class="row todos_adicionais">
                        <div class="sem_contatos row text-center">
                            <span style="color: #999;">NÃO HÁ CONTATOS ADICIONAIS.</span>
                        </div>
                    </div>
                </div>first
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Dados de Endereço</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="cep" class="form-label">CEP <span>*</span></label>
                            <input type="text" class="form-control" name="cep" id="cep" required>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="logradouro" class="form-label"> Logradouro <span>*</span></label>
                            <input type="text" class="form-control" name="logradouro" id="logradouro" required>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="numero" class="form-label">Número <span>*</span></label>
                            <input type="text" class="form-control" name="numero" id="numero" required>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" name="complemento" id="complemento">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="bairro" class="form-label">Bairro<span>*</span></label>
                            <input type="text" class="form-control" name="bairro" id="bairro">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="ponto_referencia" class="form-label">Ponto de Referência</label>
                            <input type="text" class="form-control" name="ponto_referencia" id="ponto_referencia">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="uf" class="form-label">UF <span>*</span></label>
                            <select class="form-select" required name="uf" id="uf"
                                aria-label="Default select example">
                                <option value>Selecione</option>
                                @foreach ($estados as $estado)
                                    <option class="estados" data-id='{{ $estado->id }}'
                                        value="{{ $estado->uf }}">{{ $estado->uf }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="cidade" class="form-label">Cidade <span>*</span></label>
                            <select class="form-select" required name="cidade" id="cidade"
                                aria-label="Default select example">
                                <option value>Selecione</option>
                                @foreach ($cidades as $cidade)
                                    <option class="cidades" data-id='{{ $cidade->id }}'
                                        value="{{ $cidade->title }}">{{ $cidade->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="condominio" class="form-label">Condomínio? <span>*</span></label>
                            <select class="form-select" required name="condominio" id="condominio"
                                aria-label="Default select example">
                                <option value>Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Observação</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <div class="row">
                        <div class="form-floating">
                            <textarea class="form-control" name="observacao" id="observacao" placeholder="Leave a comment here"
                                id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="botao_submit text-center">
                <button type="submit" class="btn btn-success cadastrar">
                    <i class="fa fa-plus fa-fw"></i> Cadastrar
                </button>
            </div>

        </form>
    </div>
@stop

@section('css')
    {{-- @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js']) --}}
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            // INICIAR EM HIDDEM
            $('.formulario_fisica').hide();
            $('#cpf').removeAttr('required');
            //Variavel com valor do campo CPF
                var cpf=$("#cpf").val();
                var cpf2 = cpf.replace('.', '');
                var cpf2 = cpf2.replace('.', '');
            $('#nome').removeAttr('required');
            $('#rg').removeAttr('required');
            $('#ativo_fisico').removeAttr('required');
            // MASCARAS
            // $("#form_CLICliente_CLICep").mask('00000-000');
            $("#telefone").mask('(00)00000-0000');
            // $("#cnpj").inputmask('00.000.000/0000-00');
            // $("#cpf").inputmask('000.000.000-00');
            // $('.btn-tool').click();
            $('.pessoa_juridica').click(function(e) {
                $('.formulario_juridico').show();
                $('.formulario_fisica').hide();
                $('.formulario_fisica input').val('');
                $('#cnpj').attr('required', true);
                $('#razao_social').attr('required', true);
                $('#nome_fantasia').attr('required', true);
                $('#indicador_estadual').attr('required', true);
                $('#recolimento').attr('required', true);
                $('#ativo_juridico').attr('required', true);
                $('#cpf').removeAttr('required');
                $('#nome').removeAttr('required');
                $('#rg').removeAttr('required');
                $('#ativo_fisico').removeAttr('required');
            });
            $('.pessoa_fisica').click(function(e) {
                $('.formulario_juridico').hide();
                $('.formulario_fisica').show();
                $('.formulario_juridico input').val('').attr('selected', true);
                $('#cpf').attr('required', true);
                $('#nome').attr('required', true);
                $('#rg').attr('required', true);
                $('#ativo_fisico').attr('required', true);
                $('#cnpj').removeAttr('required');
                $('#razao_social').removeAttr('required');
                $('#nome_fantasia').removeAttr('required');
                $('#indicador_estadual').removeAttr('required');
                $('#recolimento').removeAttr('required');
                $('#ativo_juridico').removeAttr('required');
            });
            $('.adicionar').click(function(e) {
                var content = '';
                content += ' <div class="contatos_pricipal_linhas row">';
                content += '            <div class="mb-3 col-md-3">';
                content +=
                    '                <label for="telefone" class="form-label">Telefone <span>*</span></label>';
                content +=
                    '                <input type="text" class="form-control" name="telefone[]" required id="telefone" >';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-2">';
                content += '                <label for="tipo_telefone" class="form-label">';
                content += '                    Tipo<span>*</span></label>';
                content += '                </label>';
                content +=
                    '                <select class="form-select" required name="tipo_telefone[]" id="tipo_telefone"';
                content += '                    aria-label="Default select example">';
                content += '                    <option selected>Selecione</option>';
                content += '                    <option value="Residencial">Residencial</option>';
                content += '                    <option value="comercial">Comercial</option>';
                content += '                    <option value="celular">Celular</option>';
                content += '                </select>';
                content += '           </div>';
                content += '            <div class="mb-3 col-md-4">';
                content += '                <label for="email" class="form-label">E-mail </label>';
                content +=
                    '                <input type="email" class="form-control" name="email[]" id="email" >';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-2">';
                content += '                 <label for="tipo_email" class="form-label">';
                content += '                    Tipo';
                content += '                </label>';
                content +=
                    '                <select class="form-select" name="tipo_email[]" id="tipo_email"';
                content += '                    aria-label="Default select example">';
                content += '                    <option selected>Selecione</option>';
                content += '                    <option value="Pessoal">Pessoal</option>';
                content += '                     <option value="Comercial">Comercial</option>';
                content += '                    <option value="Outro">Outro</option>';
                content += '               </select>';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-1 botao">';
                content += '                <button type="button" class="remover btn">Remover</button>';
                content += '            </div>';
                content += '        </div>';
                content += '    </div>';
                $('.todos_contatos').append(content);
                $('.remover').click(function(e) {
                    $(this).parent().parent().remove();
                });
            });
            $('.adicionar_adicionais').click(function(e) {
                $('.sem_contatos').remove();
                var content = '';
                content += ' <div class="contatos_adicionais_linhas row">';
                content += '            <div class="mb-3 col-md-6">';
                content += '                <label for="nome_adicionais" class="form-label">Nome </label>';
                content +=
                    '                <input type="text" class="form-control" name="nome_adicionais[]" id="nome_adicionais" >';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-3">';
                content +=
                    '                <label for="empresa_adicionais" class="form-label">Empresa </label>';
                content +=
                    '                <input type="text" class="form-control" name="empresa_adicionais[]" id="empresa_adicionais" >';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-3">';
                content +=
                    '                <label for="cargo_adicionais" class="form-label">Cargo </label>';
                content +=
                    '                <input type="text" class="form-control" name="cargo_adicionais[]" id="cargo_adicionais" >';
                content += '            </div>';
                content += '            <div class="mb-3 col-md-3">';
                content +=
                    '                <label for="telefone_adicionais" class="form-label">Telefone </label>';
                content +=
                    '                <input type="text" class="form-control" name="telefone_adicionais[]" id="telefone_adicionais" >';
                content += '        </div>';
                content += '        <div class="mb-3 col-md-3">';
                content += '            <label for="tipo_telefone_adicionais" class="form-label">';
                content += '                Tipo';
                content += '            </label>';
                content +=
                    '            <select class="form-select"  name="tipo_telefone_adicionais[]" id="tipo_telefone_adicionais"';
                content += '                aria-label="Default select example">';
                content += '                <option selected>Selecione</option>';
                content += '                <option value="comercial">Comercial</option>';
                content += '                <option value="celular">Celular</option>';
                content += '            </select>';
                content += '        </div>';
                content += '        <div class="mb-3 col-md-4">';
                content += '            <label for="email_adicionais" class="form-label">E-mail</label>';
                content +=
                    '            <input type="text" class="form-control" name="email_adicionais[]" id="email_adicionais">';
                content += '        </div>';
                content += '        <div class="mb-3 col-md-2">';
                content += '            <label for="tipo_email_adicionais" class="form-label">';
                content += '                Tipo';
                content += '            </label>';
                content +=
                    '            <select class="form-select" name="tipo_email_adicionais[]" id="tipo_email_adicionais"';
                content += '                aria-label="Default select example">';
                content += '                <option selected>Selecione</option>';
                content += '                <option value="Pessoal">Pessoal</option>';
                content += '                <option value="Comercial">Comercial</option>';
                content += '                <option value="Outro">Outro</option>';
                content += '            </select>';
                content += '        </div>';
                content += '        <div class="mb-3 col-md-1 botao">';
                content +=
                    '            <button type="button" class="remover_adicionais btn">Remover</button>';
                content += '       </div>';
                content += '    </div>';
                $('.todos_adicionais').append(content);
                $('.remover_adicionais').click(function(e) {
                    $(this).parent().parent().remove();
                });
            });
            // CNPJ
            $('#cnpj').blur(function(e) {
                console.log($(this).val());
                $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
                //Variavel com valor do campo cnpj
                var cnpj=$("#cnpj").val();
                var cnpj2 = cnpj.replace('.', '');
                var cnpj2 = cnpj2.replace('.', '');
                //*se tiver 1 ponto, dá um replace no ponto. se tiver 10... dá 10 replace.
                var cnpj2 = cnpj2.replace('-', '');
                var cnpj2 = cnpj2.replace('/', '');
                $.ajax({
                    url: 'https://receitaws.com.br/v1/cnpj/' + cnpj2,
                    method: 'GET',
                    dataType: 'jsonp',
                }).done(function(results, sucess) {
                    console.log(results);
                    console.log(results['municipio']);
                    $(this).val(results['cnpj']);
                    $("#razao_social").val(results['nome']);
                    $("#nome_fantasia").val(results['fantasia']);
                    $("#cep").val(results['cep']);
                    $("#logradouro").val(results['logradouro']);
                    $("#numero").val(results['numero']);
                    $("#complemento").val(results['complemento']);
                    $("#bairro").val(results['bairro']);
                    $("#uf").val(results['uf']).click();
                    $("#cidade").val(results['municipio']); //.attr('selected', true);
                });
            });
            $('#cep').blur(function(e) {
                console.log($(this).val());
                $.ajax({
                    url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/',
                    method: 'GET',
                    dataType: 'jsonp',
                }).done(function(results, sucess) {
                    console.log(results);
                    $("#cep").val(results['cep']);
                    $("#logradouro").val(results['logradouro']);
                    $("#numero").val(results['numero']);
                    $("#complemento").val(results['complemento']);
                    $("#bairro").val(results['bairro']);
                    $("#uf").val(results['uf']).click();
                    $("#cidade").val(results['municipio']); //.attr('selected', true);
                });
            });
            $('#uf').click(function(e) {
                var estado = $(this).val();
                if (estado) {
                    $.ajax({
                        url: '/cidade/' + estado,
                        method: 'GET',
                        dataType: 'json',
                    }).done(function(results, sucess) {
                        console.log('cidade');
                        console.log(results);
                        $('#cidade').empty();
                        var content = '';
                        content += '<option value>Selecione</option>';
                        if (results) {
                            $('#cidade').removeAttr('disabled');
                            $.each(results, function(k, v) {
                                content += '<option value="' + v['title'] + '">' + v[
                                    'title'] + '</option>';
                            });
                            $('#cidade').append(content);
                        }
                    });
                } else {
                    $('#cidade').empty();
                    var content = '';
                    content += '<option value>Selecione</option>';
                    $('#cidade').attr('disabled', true);
                    $('#cidade').append(content);
                }
            });
            // CPF
            $('#cpf').blur(function(e) {
                console.log($(this).val());
                $('#cpf').mask('000.000.000-00', {reverse: true});
               //Variavel com valor do campo CPF
                var cpf=$("#cpf").val();
                var cpf2 = cpf.replace('.', '');
                var cpf2 = cpf2.replace('.', '');
                console.log(cpf2);
            });
            // Telefone
            // $('#telefone').blur(function(e) {
            //     console.log($(this).val());
            //     $('#telefone').mask('(00)00000-0000', {reverse: true});
            //    //Variavel com valor do campo CPF
            //     var telefone=$("#telefone").val();
            //     var telefone2 = telefone.replace('-', '');
            //     var telefone2 = telefone2.replace('-', '');
            //     console.log(telefone2);
            // });

        });
    </script>
@stop
