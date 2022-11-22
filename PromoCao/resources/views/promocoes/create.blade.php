@extends('adminlte::page')

@section('content')
    <h3>Nova Promoção</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('promocoes') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'promocoes.store']) !!}
        <div class="form-group">
            {!! Form::label('promocao_titulo', 'Título:') !!}
            {!! Form::text('promocao_titulo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_descricao', 'Descrição:') !!}
            {!! Form::text('promocao_descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_preco', 'Preço:') !!}
            {!! Form::text('promocao_preco', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_url', 'URL:') !!}
            {!! Form::text('promocao_url', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_id', 'Loja:') !!}
            {!! Form::select('loja_id', \App\Models\Loja::orderBy('loja_nomeFantasia')
                ->pluck('loja_nomeFantasia', 'loja_id')->toArray(), null,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::select('consumidor_id', \App\Models\Consumidor::orderBy('consumidor_nome')
                ->pluck('consumidor_nome', 'consumidor_id')->toArray(), null,['class' => 'form-control', 'required']) !!}
        </div>

        <h4>Cupons</h4>
        <div class="input_fields_wrap"></div>
        <br>
        
        <button style="float:right" class="add_field_button btn btn-default">Adicionar Cupom</button>

        <br>
        <hr />

        <div class="form-group">
            {!! Form::submit('Salvar Promoção', ['class' => 'btn btn-primary']) !!}
            <!-- {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!} -->
        </div>
    {!! Form::close() !!}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");
            var x = 0;
            $(add_button).click(function(e) {
                x++;
                var newField = '<div><div style="width:94%; float:left" id="cupom">{!! Form::select("cupons[]", \App\Models\Cupom::orderBy("cupom_titulo")->pluck("cupom_titulo", "cupom_id")->toArray(), null, ["class" => "form-control", "required", "placeholder"=>"Selecione um cupom"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $(wrapper).append(newField);
            });
            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
    </script>
@stop