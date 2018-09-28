@extends('layouts.app')

@push('scripts')
    <script>
        //Input mask
        $(document).ready(function($){
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('#cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.tel').mask('(00) 00000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optional: true
                    }
                }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/,
                        fallback: '/'
                    },
                    placeholder: "__/__/____"
                }
            });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });

        //jQuery to find CEP
        jQuery(function($){
            $("#cep").change(function(){
                var cep_code = $(this).val();
                if( cep_code.length <= 0 ) return;
                $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
                    function(result){
                        if( result.status!=1 ){
                            alert(result.message || "Houve um erro desconhecido");
                            return;
                        }
                        $("input#cep").val( result.code );
                        $("input#estado").val( result.state );
                        $("input#cidade").val( result.city );
                        $("input#bairro").val( result.district );
                        $("input#endereco").val( result.address );
                        $("input#uf").val( result.state );
                    });
            });
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" id="cadastro">
                        <h5>Editar dados de um paroquiano</h5>
                    </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('peopleUpdate', ['id' => $people->id]) }}">
                                @csrf
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="nome">Nome</label>
                                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $people->nome }}">
                                                @if($errors->get('nome'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="rg">RG</label>
                                                <input id="rg" type="text" class="form-control" name="rg" value="{{ $people->rg }}">
                                                @if($errors->get('rg'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ $people->cpf }}">
                                                @if($errors->get('cpf'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="tel">Telefone</label>
                                                <input id="tel" type="text" class="form-control" name="tel" value="{{ $people->tel }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cel">Celular</label>
                                                <input id="cel" type="text" class="form-control" name="cel" value="{{ $people->cel }}">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input id="cep" type="text" class="form-control" name="cep" value="{{ $people->cep }}">
                                                @if($errors->get('cep'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="endereco">Endereco</label>
                                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{ $people->endereco }}">
                                                @if($errors->get('endereco'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="num">Número</label>
                                                <input id="num" type="text" class="form-control" name="num" value="{{ $people->num }}">
                                                @if($errors->get('num'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input id="bairro" type="text" class="form-control" name="bairro" value="{{ $people->bairro }}">
                                                @if($errors->get('bairro'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="uf">UF</label>
                                                <input id="uf" type="text" class="form-control" name="uf" value="{{ $people->uf }}">
                                                @if($errors->get('uf'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input id="cidade" type="text" class="form-control" name="cidade" value="{{ $people->cidade }}">
                                                @if($errors->get('cidade'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-success">Editar</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    @stack('scripts')
@endsection
