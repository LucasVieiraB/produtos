@extends('layouts.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
    @if(count($cats) > 0)
            <table class="table  table-hover">
                <thead>
                    <th scope="col">Códigos</th>
                    <th scope="col">Nome da Categoria</th>
                    <th scope="col">Ações</th>
                </thead>
                <tbody>
        @foreach ($cats as $cat)
                    <tr>
                        <th scope="row">{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                            <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach               
                </tbody>
            </table>
    @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>


@endsection