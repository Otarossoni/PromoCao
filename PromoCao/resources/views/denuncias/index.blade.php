@extends ('layouts.default')

@section ('content')
    <h1>Denúncias</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Consumidor</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($denuncias as $denuncia)
                <tr>
                    <td>{{ $denuncia->denuncia_titulo }} </td>
                    <td>{{ $denuncia->denuncia_descricao }} </td>
                    <td>{{ $denuncia->consumidor_id }} </td>
                    <td>
                        <a href="{{ route('denuncias.edit', ['denuncia_id' => $denuncia->denuncia_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$denuncia->denuncia_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $denuncias->links("pagination::bootstrap-4")}}

    <a href="{{ route('denuncias.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"denuncias"
@stop