@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
    @if(count($prods) > 0)
            <table class="table  table-hover">
                <thead>
                    <th scope="col">Códigos</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ações</th>
                </thead>
                <tbody>
        @foreach ($prods as $prod)
                    <tr>
                        <td scope="row">{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->preço}}</td>
                        <td>{{$prod->estoque}}</td>
                        <td>
                            <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach               
                </tbody>
            </table>
    @endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Nova Produtos</a>
        </div>
    </div>


@endsection