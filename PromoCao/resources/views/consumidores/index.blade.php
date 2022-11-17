@extends ('layouts.default')

@section ('content')
    <h1>Consumidores</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($consumidores as $consumidor)
                <tr>
                    <td>{{ $consumidor->consumidor_nome }} </td>
                    <td>{{ $consumidor->consumidor_email }} </td>
                    <td>
                        <a href="{{ route('consumidores.edit', ['consumidor_id' => $consumidor->consumidor_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$consumidor->consumidor_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $consumidores->links("pagination::bootstrap-4")}}

    <a href="{{ route('consumidores.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"consumidores"
@stop