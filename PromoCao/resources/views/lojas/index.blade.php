@extends ('layouts.default')

@section ('content')
    <h1>Lojas</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>URL</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($lojas as $loja)
                <tr>
                    <td>{{ $loja->loja_nomeFantasia }} </td>
                    <td>{{ $loja->loja_url }} </td>
                    <td>
                        <a href="{{ route('lojas.edit', ['loja_id' => $loja->loja_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$loja->loja_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('lojas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"lojas"
@stop