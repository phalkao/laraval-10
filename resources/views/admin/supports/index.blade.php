<h1>Listagem dos suportes</h1>


<a href="{{ route("supports.create") }}">Nova dúvida...</a>

<table>
    <thead>
        <th>   
            <td>Assunto</td>
            <td>Descrição</td>
            <td>Status</td>
            <td>Ações</td>
        </th>        
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a class="" href="{{ route('supports.show', $support->id) }}">Exibir</a>
                    <a class="" href="{{ route('supports.edit', $support->id) }}">Editar</a>
                    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                        @csrf() 
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination 
    :paginator="$supports" 
    :appends="$filters"
/>
