@extends ('adminlte::page')

@section ('content')
    <h1>Tipos Usuário</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('tipos/create') }}'">Inserir</button><p></p>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
        </thead>

        <tbody>
            @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->tipo_descricao }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop