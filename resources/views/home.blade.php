@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('#cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
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
    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div role="button" data-toggle="collapse" data-target="#hide" aria-expanded="false"  aria-controls="hide">
                    <div class="card-header" id="cadastro">
                        <h5>Cadastro de novo paroquiano</h5>
                    </div>

                </div>
                <div id="hide" class="collapse" aria-labelledby="cadastro" >

                    <div class="card-body">
                        <form method="POST" action="{{ route('create') }}">
                            @csrf
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="nome">Nome</label>
                                                <input id="nome" type="text" class="form-control" name="nome">
                                                @if($errors->get('nome'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="rg">RG</label>
                                                <input id="rg" type="text" class="form-control" name="rg">
                                                @if($errors->get('rg'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input id="cpf" type="text" class="form-control" name="cpf">
                                                @if($errors->get('cpf'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="tel">Telefone</label>
                                                <input id="tel" type="text" class="form-control" name="tel">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cel">Celular</label>
                                                <input type="text" name="cel" class="form-control">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input id="cep" type="text" class="form-control">
                                                @if($errors->get('cep'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="endereco">Endereco</label>
                                                <input id="endereco" type="text" class="form-control" name="endereco">
                                                @if($errors->get('endereco'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="num">Número</label>
                                                <input id="num" type="text" class="form-control" name="num">
                                                @if($errors->get('num'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input id="bairro" type="text" class="form-control" name="bairro">
                                                @if($errors->get('bairro'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="uf">UF</label>
                                                <input id="uf" type="text" class="form-control" name="uf">
                                                @if($errors->get('uf'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input id="cidade" type="text" class="form-control" name="cidade">
                                                @if($errors->get('cidade'))
                                                    <p class="text-danger">Corrija este campo.</p>
                                                @endif
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Existe um erro de preenchimento no formulário!</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br><br>
    <h4>Lista de paroquianos</h4>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $value)
            <tr>
                <td>{{$value->nome}}</td>
                <td>{{$value->tel}}</td>
                <td>{{$value->cel}}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('viewUpdate', ['id' => $value->id]) }}">
                        <i class="fa fa-user-edit" style="font-size: 15px"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$value->id}}">
                        <i class="fa fa-trash-alt" style="font-size: 15px"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>{{ $people->links() }}</td>
        </tr>
        </tbody>
    </table>

</div>

@foreach($people as $value)
<!-- Modal -->
<div class="modal fade" id="delete{{$value->id}}" role="dialog" aria-labelledby="delete" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">ATENÇÃO!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja deletar este paroquiano?
            </div>
            <div class="modal-footer">
                <form action="{{ route('delete', ['id' => $value->id]) }}" method="POST">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
