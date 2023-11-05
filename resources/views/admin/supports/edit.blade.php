<h1>Dúvida: {{ $support->id }}</h1>

<ul>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ul>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <input name="subject" id="subject" type="text" placeholder="Assunto..." value="{{ $support->subject }}">
    <textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição da dúvida...">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>