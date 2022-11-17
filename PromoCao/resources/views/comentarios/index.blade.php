@extends ('layouts.default')

@section ('content')
    <h1>Comentários</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Consumidor</th>
            <th>Promoção</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->comentario_titulo }} </td>
                    <td>{{ $comentario->comentario_descricao }} </td>
                    <td>{{ $comentario->consumidor_id }} </td>
                    <td>{{ $comentario->promocao_id }} </td>
                    <td>
                        <a href="{{ route('comentarios.edit', ['comentario_id' => $comentario->comentario_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$comentario->comentario_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $comentarios->links("pagination::bootstrap-4")}}

    <a href="{{ route('comentarios.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"comentarios"
@stop