@extends ('layouts.default')

@section ('content')
    <h1>Cupons</h1>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Cupom</th>
            <th>URL</th>
            <th>Loja</th>
        </thead>

        <tbody>
            @foreach($cupons as $cupom)
                <tr>
                    <td>{{ $cupom->cupom_titulo }} </td>
                    <td>{{ $cupom->cupom_aplicavel }} </td>
                    <td>{{ $cupom->cupom_url }} </td>
                    <td>{{ isset($cupom->loja->loja_nomeFantasia) ? $cupom->loja->loja_nomeFantasia : "Loja não informada!" }}</td>
                    <td>
                        <a href="{{ route('cupons.edit', ['cupom_id' => $cupom->cupom_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$cupom->cupom_id}})" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $cupons->links("pagination::bootstrap-4")}}

    <a href="{{ route('cupons.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"cupons"
@stop