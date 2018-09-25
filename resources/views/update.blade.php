@extends('layouts.app')

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
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="rg">RG</label>
                                                <input id="rg" type="text" class="form-control" name="rg" value="{{ $people->rg }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ $people->cpf }}">
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
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="endereco">Endereco</label>
                                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{ $people->endereco }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="num">Número</label>
                                                <input id="num" type="text" class="form-control" name="num" value="{{ $people->num }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input id="bairro" type="text" class="form-control" name="bairro" value="{{ $people->bairro }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="uf">UF</label>
                                                <input id="uf" type="text" class="form-control" name="uf" value="{{ $people->uf }}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input id="cidade" type="text" class="form-control" name="cidade" value="{{ $people->cidade }}">
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
@endsection
