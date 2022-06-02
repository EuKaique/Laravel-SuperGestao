@extends('app.layouts.basico')

@section('titulo', 'Detalhes do produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar detalhes do produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href=" {{ route('produto.index') }} ">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <h4>Produto</h4>
            <div>Nome: {{ $produto_detalhe->produto->nome }}</div>
            <br>
            <div>Descrição: {{ $produto_detalhe->produto->descricao }}</div>
            <br>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app.produto-detalhe.components.form_create_edit', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>

    </div>

@endsection
