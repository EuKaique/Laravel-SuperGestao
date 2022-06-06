@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('conteudo')
    <style>
        nav{
            padding: 1rem;
        }
        nav div:first-child{
            display: none;
        }    
    </style>
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de pedidos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID do pedido</th>
                            <th>Cliente</th>
                            <th>Adicionar produto</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                           <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->cliente_id }}</td>
                                <td><a href="{{ route('pedido-produto.create', ['pedido' => $pedido->id]) }}">Adicionar</a></td>
                                <td><a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a></td>
                                <td><a href="{{ route('pedido.edit', ['pedido' => $pedido->id]) }}">Editar</a></td>
                                <td>
                                    <form id="form_{{$pedido->id}}" method="post" action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                           </tr> 
                        @endforeach
                    </tbody>
                </table>
                {{ $pedidos->appends($request)->links() }}
                <br>
                Mostrando {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} no total         
            </div>
        </div>       
    </div>

@endsection
