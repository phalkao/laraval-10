<h1>Nova dúvida</h1>

<ul>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ul>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input name="subject" id="subject" type="text" placeholder="Assunto..." value="{{ old('subject') }}">
    <textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição da dúvida...">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>