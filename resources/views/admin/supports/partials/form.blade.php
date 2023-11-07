@csrf()
<input name="subject" id="subject" type="text" placeholder="Assunto..." value="{{ $support->subject ?? old('subject') }}">
<textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição da dúvida...">{{ $support->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>
