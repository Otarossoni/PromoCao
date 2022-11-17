@extends ('layouts.default')

@section ('content')
    <h1>Promoções</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>URL</th>
            <th>Consumidor</th>
            <th>Loja</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($promocoes as $promocao)
                <tr>
                    <td>{{ $promocao->promocao_titulo }} </td>
                    <td>{{ $promocao->promocao_descricao }} </td>
                    <td>{{ $promocao->promocao_preco }} </td>
                    <td>{{ $promocao->promocao_url }} </td>
                    <td>{{ $promocao->consumidor_id }} </td>
                    <td>{{ $promocao->loja_id }} </td>
                    <td>
                        <a href="{{ route('promocoes.edit', ['promocao_id' => $promocao->promocao_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$promocao->promocao_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $promocoes->links("pagination::bootstrap-4")}}

    <a href="{{ route('promocoes.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"promocoes"
@stop