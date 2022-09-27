@extends ('adminlte::page')

@section ('content')
    <h1>Lojas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>URL</th>
        </thead>

        <tbody>
            @foreach($lojas as $loja)
                <tr>
                    <td>{{ $loja->loja_nomeFantasia }} </td>
                    <td>{{ $loja->loja_url }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop