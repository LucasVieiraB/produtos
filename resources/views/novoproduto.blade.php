@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produtos</label>
                    <input type="text" class="form-control" name="nomeProduto" 
                           id="nomeProduto" placeholder="Produtos" />
                </div>

                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produtos</label>
                    <input class="form-control" name="estoqueProduto" 
                           id="estoqueProduto" placeholder="Quantidade" type="number" />
                </div>
                
                <div class="form-group">
                    <label for="precoProduto">Preço do Produtos</label>
                    <input class="form-control" name="precoProduto" 
                           id="precoProduto" placeholder="R$" type="double" />
                </div>

                <div class="form-group">
                    <label for="categoriaProduto">Categoria do Produtos</label>
                    
                    {{-- Busca de categorias da tabela categorias para o cadastro de produtos --}}
                    <select id="categoriaProduto" name="categoriaProduto">
                        <option>Selecione...</option>
                        
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos" class="btn btn-danger btn-sm">Cancelar</a>
            </form>
        </div>
    </div>
@endsection