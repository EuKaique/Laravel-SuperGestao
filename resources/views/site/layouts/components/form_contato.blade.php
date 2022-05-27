{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{ $classe }}" value="{{ old('nome') }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="{{ $classe }}" value="{{ old('telefone') }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{ $classe }}" value="{{ old('email') }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $value)
            <option value="{{$value->id}}" {{ old('motivo_contatos_id') == $value->id ? 'selected' : '' }} >{{$value->motivo_contato}}</option>
        @endforeach
    </select>
     {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem...">{{ old('mensagem') != '' ? old('mensagem') : '' }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>