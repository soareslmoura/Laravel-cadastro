@extends('layouts.app',['current'=>'categorias'])

@section('body')

    <div class="card border">
        <div class="card-body">
            @if(count($prods) > 0)
                <h3 class="card-title">Cadastro de Produtos</h3>
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Estoque</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prods as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->nome}}</td>
                            <td>{{$c->preco}}</td>
                            @foreach($cats as $d)
                                @if($c->categoria_id == $d->id)
                                     <td>{{$d->nome}}</td>
                                @endif
                            @endforeach
                            <td>{{$c->estoque}}</td>
                            <td>
                                <a href="/produtos/editar/{{$c->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$c->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/novoproduto" class="btn btn-sm btn-success" role="button">Novo Produto</a>
        </div>
    </div>

@endsection