@extends ('layouts.default')

@section ('content')
    <h1>Promoções</h1>

    {!! Form::open(['name' => 'form-name', 'route' => 'promocoes']) !!}
        <div class="sidebar-form">
            <div class="input-group">
                <input type="text" name="desc_filtro" class="form-control" style="width: 80% !important;" placeholder="Pesquisa...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    {!! Form::close() !!}
    <br>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>URL</th>
            <th>Consumidor</th>
            <th>Loja</th>
            <th>Cupons</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($promocoes as $promocao)
                <tr>
                    <td>{{ $promocao->promocao_titulo }} </td>
                    <td>{{ $promocao->promocao_descricao }} </td>
                    <td>{{ $promocao->promocao_preco }} </td>
                    <td>{{ $promocao->promocao_url }} </td>
                    <td>{{ isset($promocao->consumidor->consumidor_nome) ? $promocao->consumidor->consumidor_nome : "Consumidor não informado!" }}</td>
                    <td>{{ isset($promocao->loja->loja_nomeFantasia) ? $promocao->loja->loja_nomeFantasia : "Loja não informada!" }}</td>
                    <td>-</td>
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