@extends ('layouts.default')

@section ('content')
    <h1 style="text-align: center; padding: 3%">Comentários</h1>

    {!! Form::open(['name' => 'form-name', 'route' => 'comentarios']) !!}
        <div class="sidebar-form" style="margin-left: 25%; width: 50%">
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
            <th>Consumidor</th>
            <th>Promoção</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->comentario_titulo }} </td>
                    <td>{{ $comentario->comentario_descricao }} </td>
                    <td>{{ isset($comentario->consumidor->consumidor_nome) ? $comentario->consumidor->consumidor_nome : "Consumidor não informado!" }}</td>
                    <td>{{ isset($comentario->promocao->promocao_titulo) ? $comentario->promocao->promocao_titulo : "Promoção não informada!" }}</td>
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