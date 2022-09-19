<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lojas</title>
    </head>
    <body>
        <h1>Lojas</h1>
        <ul>
            @foreach($lojas as $loja)
                <li><b>{{ $loja->loja_nomeFantasia }}</b> => Acesse: {{ $loja->loja_url }}</li>
                <br>
            @endforeach
        </ul>
    </body>
</html>