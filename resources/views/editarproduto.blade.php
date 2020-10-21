@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtosjava/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produtos</label>
                    <input type="text" class="form-control" name="nomeProduto" 
                id="nomeProduto" placeholder="Produtos" value="{{$prod->nome}}" />
                </div>

                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produtos</label>
                    <input class="form-control" name="estoqueProduto" 
                           id="estoqueProduto" placeholder="Quantidade" type="number" value="{{$prod->estoque}}"/>
                </div>
                
                <div class="form-group">
                    <label for="precoProduto">Preço do Produtos</label>
                    <input class="form-control" name="precoProduto" 
                        id="precoProduto" placeholder="R$" type="number" value="{{$prod->preço}}" />
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection