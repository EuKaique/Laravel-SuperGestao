@extends('app.layouts.basico')

@section('titulo', 'Pedidos Produtos')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar produtos ao pedido</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href=" {{ route('pedido.index') }} ">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <h4>Detalhes do pedido</h4>
            <p>ID do pedido: {{$pedido->id}}</p>
            <p>Cliente: {{$pedido->cliente_id}}</p>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <h4>Itens do pedido</h4>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do produto</th>
                            <th>Data de cadastro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedido->produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->pivot->created_at->format('d/m/Y') }}</td>
                            <td>
                                <form id="form_{{$produto->pivot->id}}" method="post" action="{{ route('pedido-produto.destroy', ['pedidoProduto' => $produto->pivot->id, 'pedido' => $pedido->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$produto->pivot->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form method="post" action="{{ route('pedido-produto.store', ['pedido' => $pedido->id]) }}">
                    @csrf
                    <select name="produto_id">
                        <option>--Selecione um produto--</option>
                        @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}" {{ old('produto_id') == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
                        @endforeach                  
                    </select>
                    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

                    <input type="number" name="quantidade" value="{{ old('quantidade') ?? ''}}" placeholder="Quantidade" class="borda-preta" />
                    {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
